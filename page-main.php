<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rara_Academic
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php masterslider(1); ?>      
            
            <h2 class="second-header">Наши курсы</h2>            
            
            <div class="cours-posts">
                <?php
                    if ( have_posts() ) :
                    query_posts('cat=3');
                    while (have_posts()) : the_post();
                ?>
                <div class="cours-post">
                    <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $page->ID, 'full'); ?></a>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_content(); ?>
                </div>     
                <?php
                     endwhile;
                     endif;
                     wp_reset_query();                
                ?>
            </div>    

            <hr>
            
            <h2 class="second-header">О нас</h2>
            
            <div id="about-block">
                <p>Актерские курсы нашей театральной студии научат сложному актерскому мастерству импровизации, быть другим, оставаясь самим собой, что в будущем поможет Вам легко выходить из любой жизненной ситуации.<br>
                Курсы актерского мастерства (актерские курсы) дают Вам возможность участвовать в спектаклях театра-студии "Арт-Мастер", что научит Вас уверенно работать на публике как индивидуально, так и в составе актерской группы.</p>
                <div id="labout">
                    <label title="Видео" for="modal-1"><a href="#" class="eModal-1"><img src="<?php echo get_template_directory_uri(); ?>/images/notebook.png"></a></label>
                </div>
                <div class="modal">
                  <input class="modal-open" id="modal-1" type="checkbox" hidden>
                  <div class="modal-wrap" aria-hidden="true" role="dialog">
                    <label class="modal-overlay" for="modal-1"></label>
                    <div class="modal-dialog smd">
                        <div class="modal-header">
                            <h2>Видео</h2>
                            <label class="btn-close" for="modal-1" aria-hidden="true">×</label>
                        </div>
                        <div class="modal-body">
                            <div class="video-widget">
                                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>                
                <div id="rabout">
                    <ul>
                        <li><p><i class="fa fa-check" aria-hidden="true"></i> Лучшие профессиональные курсы в Москве</p></li>
                        <li><p><i class="fa fa-check" aria-hidden="true"></i> 12 лет успешной работы</p></li>
                        <li><p><i class="fa fa-check" aria-hidden="true"></i> Высокопрофессиональные педагоги</p></li>
                        <li><p><i class="fa fa-check" aria-hidden="true"></i> Программа ТИ им. Б.Щукина</p></li>
                        <li><p><i class="fa fa-check" aria-hidden="true"></i> Расположение в центре Москвы</p></li>
                        <li><p><i class="fa fa-check" aria-hidden="true"></i> Доступные цены и гибкая система скидок</p></li>
                        <li><p><i class="fa fa-check" aria-hidden="true"></i> Более 1000 счастливых и успешных выпускников</p></li>
                        <li><p><i class="fa fa-check" aria-hidden="true"></i> Участие в спектаклях, съемки в кино и на ТВ</p></li>
                        <li><p><i class="fa fa-check" aria-hidden="true"></i> Помощь при поступлении в театральные ВУЗы</p></li>
                    </ul>
                </div>
            </div>
            
            <div id="poet">
                <img src="<?php echo get_template_directory_uri(); ?>/images/poet.jpg">
                <div id="rech">
                    <span>"Трудное надо сделать привычным, привычное - легким, а легкое-приятным!"</span>
                    <p>(К.С. Станиславский)</p>
                </div>
            </div>
            
            <div id="contact-block">
                <p>Дорогие друзья!<br>
                Для записи на наши курсы или на актерский тренинг в Москве звоните, пожалуйста, по тел. <?php $phone = get_theme_mod('rara_academic_phone'); if( $phone ) echo '<a href="tel:' . preg_replace('/\D/', '', $phone) . '" class="tel-link">' . esc_html( $phone ) . '</a>'; ?>	(c 12:00 до 21:00) или просто оставьте свои контактные данные и мы Вам перезвоним!</p>
                
                <?php echo do_shortcode( '[contact-form-7 id="49" title="Главная форма"]' ); ?>
            
            </div>
            
            <div id="map-block">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3AYYE_o3OLApHQiM71bC5Qrf_8i2hoRt3B&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=falls"></script>
            </div>
            
            <!-- <div id="ts">
                <ul>
                    <li>Текст статьи</li>
                    <li>Текст статьи</li>
                    <li>Текст статьи</li>
                    <li>Текст статьи</li>
                    <li>Текст статьи</li>
                    <li>Текст статьи</li>
                    <li>Текст статьи</li>
                    <li>Текст статьи</li>
                    <li>Текст статьи</li>
                    <li>Текст статьи</li>
                    <li>Текст статьи</li>
                </ul>
            </div> -->
            
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
