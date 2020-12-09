<?php
/**
 * Template Name: Шаблон для верстки вакансии
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();
?>

<main id="site-content" role="main">
    <?if(have_posts()):?>
    <?the_post();?>
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

                <div class="entry-content">

                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php
                        if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }
                        ?>
                    </div>
                    <header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">
                        <div class="entry-header-inner section-inner medium">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </div><!-- .entry-header-inner -->
                    </header><!-- .entry-header -->
                    

                </div><!-- .entry-content -->
            </div><!-- .post-inner -->

            <div class="section-inner">
							<?php 
                        ob_start();
                        ?>
							<!-- работать здесь begin -->
					<div class="tabs">
						<ul class="tabs__caption">
							<li class="active">Россия</li>
							<li>СНГ</li>
							<li>EMEA</li>
						</ul>
						<div class="clear"></div>
						<div class="tabs__content  active">
							<div class="tabs_wrapper flex_row justifi_st">
								<div class="accordion_wrapper">
									<ul class="accordion">
										<li>
											<a>R&amp;D<span><i>10</i></span></a>
											<ul>
												<li><p class="open_vacancy" rel="vacancy1">Территориальный менеджер<span class="decr"><span>Алматы</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy2">Junior(KAM)<span class="city"><span>Киев</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy3">Старший территориальный менеджер<span class="decr"><span>Минск</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy4">Менеджер<span class="city"><span>Киев</span></span></p></li>
											</ul>
										</li>
										<!-- mobile modals begin -->
										<div class="mobile_modal_wrapper">
											<!-- modal begin -->
											<div class="vacancy_modal vacancy1">
												<div class="close_vacancy"></div>
												<h4>Территориальный менеджер</h4>
												<div class="tags">
													<p><span class="map_tag">Алматы</span><span class="decret_tag">Декретная</span></p>
												</div>
												<dl>
													<dt>Задачи нового сотрудника</dt>
													<dd>Успешный опыт переговоров с ключевыми лицами, контроль исполнения договорных отношений:</dd> 
													<dd>Производитель-дистрибутор-клиент;</dd> 
													<dd>Ежемесячный анализ продаж с выявление проблемных зон;</dd> 
													<dd>Контроль дебиторской задолженности дистрибуторов,</dd> 
													<dd>Контроль работы торгового отдела дистрибуторов,</dd> 
													<dd>Тесное взаимодействие с руководителями отдела продаж, супервайзерами, ключевыми клиентами. Отчетность в установленной форме 
													и сроки,</dd> 
													<dd>Полевые аудиты.</dd> 
													<dd>Развитие традиционной розницы, оптового канала, региональных торговых сетей</dd>
												</dl>
												<div class="vacancy_modal_buttons">
													<p><a href="" class="grey_link">Подробнее</a><a href="" class="red_border_link">Откликнуться</a></p>
												</div>
											</div>
											<!-- modal end -->
											<!-- modal begin -->
											<div class="vacancy_modal vacancy2">
												<div class="close_vacancy"></div>
												<h4>Junior(KAM)</h4>
												<div class="tags">
													<p><span class="map_tag">Киев</span></p>
												</div>
												<dl>
													<dt>Задачи нового сотрудника</dt>
													<dd>Успешный опыт переговоров с ключевыми лицами, контроль исполнения договорных отношений:</dd> 
													<dd>Производитель-дистрибутор-клиент;</dd> 
													<dd>Ежемесячный анализ продаж с выявление проблемных зон;</dd> 
													<dd>Контроль дебиторской задолженности дистрибуторов,</dd> 
													<dd>Контроль работы торгового отдела дистрибуторов,</dd> 
													<dd>Тесное взаимодействие с руководителями отдела продаж, супервайзерами, ключевыми клиентами. Отчетность в установленной форме 
													и сроки,</dd> 
													<dd>Полевые аудиты.</dd> 
													<dd>Развитие традиционной розницы, оптового канала, региональных торговых сетей</dd>
												</dl>
												<div class="vacancy_modal_buttons">
													<p><a href="" class="grey_link">Подробнее</a><a href="" class="red_border_link">Откликнуться</a></p>
												</div>
											</div>
											<!-- modal end -->
											<!-- modal begin -->
											<div class="vacancy_modal vacancy3">
												<div class="close_vacancy"></div>
												<h4>Старший территориальный менеджер</h4>
												<div class="tags">
													<p><span class="map_tag">Минск</span><span class="decret_tag">Декретная</span></p>
												</div>
												<dl>
													<dt>Задачи нового сотрудника</dt>
													<dd>Успешный опыт переговоров с ключевыми лицами, контроль исполнения договорных отношений:</dd> 
													<dd>Производитель-дистрибутор-клиент;</dd> 
													<dd>Ежемесячный анализ продаж с выявление проблемных зон;</dd> 
													<dd>Контроль дебиторской задолженности дистрибуторов,</dd> 
													<dd>Контроль работы торгового отдела дистрибуторов,</dd> 
													<dd>Тесное взаимодействие с руководителями отдела продаж, супервайзерами, ключевыми клиентами. Отчетность в установленной форме 
													и сроки,</dd> 
													<dd>Полевые аудиты.</dd> 
													<dd>Развитие традиционной розницы, оптового канала, региональных торговых сетей</dd>
												</dl>
												<div class="vacancy_modal_buttons">
													<p><a href="" class="grey_link">Подробнее</a><a href="" class="red_border_link">Откликнуться</a></p>
												</div>
											</div>
											<!-- modal end -->
											<!-- modal begin -->
											<div class="vacancy_modal vacancy4">
												<div class="close_vacancy"></div>
												<h4>Менеджер</h4>
												<div class="tags">
													<p><span class="map_tag">Киев</span></p>
												</div>
												<dl>
													<dt>Задачи нового сотрудника</dt>
													<dd>Успешный опыт переговоров с ключевыми лицами, контроль исполнения договорных отношений:</dd> 
													<dd>Производитель-дистрибутор-клиент;</dd> 
													<dd>Ежемесячный анализ продаж с выявление проблемных зон;</dd> 
													<dd>Контроль дебиторской задолженности дистрибуторов,</dd> 
													<dd>Контроль работы торгового отдела дистрибуторов,</dd> 
													<dd>Тесное взаимодействие с руководителями отдела продаж, супервайзерами, ключевыми клиентами. Отчетность в установленной форме 
													и сроки,</dd> 
													<dd>Полевые аудиты.</dd> 
													<dd>Развитие традиционной розницы, оптового канала, региональных торговых сетей</dd>
												</dl>
												<div class="vacancy_modal_buttons">
													<p><a href="" class="grey_link">Подробнее</a><a href="" class="red_border_link">Откликнуться</a></p>
												</div>
											</div>
											<!-- modal end -->
										</div>
										<!-- modals end -->
										<li>
											<a>Продажи<span><i>4</i></span></a>
											<ul>
												<li><p class="open_vacancy" rel="vacancy5">Территориальный менеджер<span class="decr"><span>Алматы</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy6">Junior(KAM)<span class="city"><span>Киев</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy7">Старший территориальный менеджер<span class="decr"><span>Минск</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy8">Менеджер<span class="city"><span>Киев</span></span></p></li>
											</ul>
										</li>
										<li>
											<a>Маркетинг<span><i>2</i></span></a>
											<ul>
												<li><p class="open_vacancy" rel="vacancy9">Территориальный менеджер<span class="decr"><span>Алматы</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy10">Junior(KAM)<span class="city"><span>Киев</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy11">Старший территориальный менеджер<span class="decr"><span>Минск</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy12">Менеджер<span class="city"><span>Киев</span></span></p></li>
											</ul>
										</li>
										<li>
											<a>Производство<span><i>3</i></span></a>
											<ul>
												<li><p class="open_vacancy" rel="vacancy13">Территориальный менеджер<span class="decr"><span>Алматы</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy14">Junior(KAM)<span class="city"><span>Киев</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy15">Старший территориальный менеджер<span class="decr"><span>Минск</span></span></p></li>
												<li><p class="open_vacancy" rel="vacancy16">Менеджер<span class="city"><span>Киев</span></span></p></li>
											</ul>
										</li>
									</ul> 
								</div>
								<!-- modals begin -->
								<div class="modal_wrapper">
									<!-- modal begin -->
									<div class="vacancy_modal vacancy1">
										<div class="close_vacancy"></div>
										<h4>Территориальный менеджер</h4>
										<div class="tags">
											<p><span class="map_tag">Алматы</span><span class="decret_tag">Декретная</span></p>
										</div>
										<dl>
											<dt>Задачи нового сотрудника</dt>
											<dd>Успешный опыт переговоров с ключевыми лицами, контроль исполнения договорных отношений:</dd> 
											<dd>Производитель-дистрибутор-клиент;</dd> 
											<dd>Ежемесячный анализ продаж с выявление проблемных зон;</dd> 
											<dd>Контроль дебиторской задолженности дистрибуторов,</dd> 
											<dd>Контроль работы торгового отдела дистрибуторов,</dd> 
											<dd>Тесное взаимодействие с руководителями отдела продаж, супервайзерами, ключевыми клиентами. Отчетность в установленной форме 
											и сроки,</dd> 
											<dd>Полевые аудиты.</dd> 
											<dd>Развитие традиционной розницы, оптового канала, региональных торговых сетей</dd>
										</dl>
										<div class="vacancy_modal_buttons">
											<p><a href="" class="grey_link">Подробнее</a><a href="" class="red_border_link">Откликнуться</a></p>
										</div>
									</div>
									<!-- modal end -->
									<!-- modal begin -->
									<div class="vacancy_modal vacancy2">
										<div class="close_vacancy"></div>
										<h4>Junior(KAM)</h4>
										<div class="tags">
											<p><span class="map_tag">Киев</span></p>
										</div>
										<dl>
											<dt>Задачи нового сотрудника</dt>
											<dd>Успешный опыт переговоров с ключевыми лицами, контроль исполнения договорных отношений:</dd> 
											<dd>Производитель-дистрибутор-клиент;</dd> 
											<dd>Ежемесячный анализ продаж с выявление проблемных зон;</dd> 
											<dd>Контроль дебиторской задолженности дистрибуторов,</dd> 
											<dd>Контроль работы торгового отдела дистрибуторов,</dd> 
											<dd>Тесное взаимодействие с руководителями отдела продаж, супервайзерами, ключевыми клиентами. Отчетность в установленной форме 
											и сроки,</dd> 
											<dd>Полевые аудиты.</dd> 
											<dd>Развитие традиционной розницы, оптового канала, региональных торговых сетей</dd>
										</dl>
										<div class="vacancy_modal_buttons">
											<p><a href="" class="grey_link">Подробнее</a><a href="" class="red_border_link">Откликнуться</a></p>
										</div>
									</div>
									<!-- modal end -->
									<!-- modal begin -->
									<div class="vacancy_modal vacancy3">
										<div class="close_vacancy"></div>
										<h4>Старший территориальный менеджер</h4>
										<div class="tags">
											<p><span class="map_tag">Минск</span><span class="decret_tag">Декретная</span></p>
										</div>
										<dl>
											<dt>Задачи нового сотрудника</dt>
											<dd>Успешный опыт переговоров с ключевыми лицами, контроль исполнения договорных отношений:</dd> 
											<dd>Производитель-дистрибутор-клиент;</dd> 
											<dd>Ежемесячный анализ продаж с выявление проблемных зон;</dd> 
											<dd>Контроль дебиторской задолженности дистрибуторов,</dd> 
											<dd>Контроль работы торгового отдела дистрибуторов,</dd> 
											<dd>Тесное взаимодействие с руководителями отдела продаж, супервайзерами, ключевыми клиентами. Отчетность в установленной форме 
											и сроки,</dd> 
											<dd>Полевые аудиты.</dd> 
											<dd>Развитие традиционной розницы, оптового канала, региональных торговых сетей</dd>
										</dl>
										<div class="vacancy_modal_buttons">
											<p><a href="" class="grey_link">Подробнее</a><a href="" class="red_border_link">Откликнуться</a></p>
										</div>
									</div>
									<!-- modal end -->
									<!-- modal begin -->
									<div class="vacancy_modal vacancy4">
										<div class="close_vacancy"></div>
										<h4>Менеджер</h4>
										<div class="tags">
											<p><span class="map_tag">Киев</span></p>
										</div>
										<dl>
											<dt>Задачи нового сотрудника</dt>
											<dd>Успешный опыт переговоров с ключевыми лицами, контроль исполнения договорных отношений:</dd> 
											<dd>Производитель-дистрибутор-клиент;</dd> 
											<dd>Ежемесячный анализ продаж с выявление проблемных зон;</dd> 
											<dd>Контроль дебиторской задолженности дистрибуторов,</dd> 
											<dd>Контроль работы торгового отдела дистрибуторов,</dd> 
											<dd>Тесное взаимодействие с руководителями отдела продаж, супервайзерами, ключевыми клиентами. Отчетность в установленной форме 
											и сроки,</dd> 
											<dd>Полевые аудиты.</dd> 
											<dd>Развитие традиционной розницы, оптового канала, региональных торговых сетей</dd>
										</dl>
										<div class="vacancy_modal_buttons">
											<p><a href="" class="grey_link">Подробнее</a><a href="" class="red_border_link">Откликнуться</a></p>
										</div>
									</div>
									<!-- modal end -->
								</div>
								<!-- modals end -->
							</div>
						</div>		
				
					<div class="tabs__content">
						2
					</div>
					<div class="tabs__content">
						3
					</div>
				</div>
				<section class="section_wrapper">
					<h2>Факты о компании</h2>
					<div class="fact_wrapper flex_row justifi_sb">
						<div class="fact_item_wrapper">
							<div class="fact_item earth">
								<p><span>9 стран</span></p>
								<p><span>Офисы в 9 странах мира</span></p>
							</div>
						</div>
						<div class="fact_item_wrapper">
							<div class="fact_item triangles">
								
								<p><span>12 489 м<sup>2</sup></span></p>
								<p><span>Производственных площадей</span></p>
								<div class="triangle tr1"></div>
								<div class="triangle tr2"></div>
								<div class="triangle tr3"></div>
								<div class="triangle tr4"></div>
							</div>
						</div>
					</div>
					<div class="crew_count flex_row justifi_sb">
						<div class="crew_count_int_wrapper">
							<div class="crew_count_int">
								<img src="/wp-content/uploads/2020/11/crew_int.png" alt="1000 сотрудников" />
								<p>сотрудников</p>
							</div>
						</div>
						<div class="crew_count_text_wrapper">
							<div class="crew_count_text">
								<p>сотрудников</p>
							</div>
						</div>
					</div>
					<div class="male_count flex_row justifi_sb">
						<div class="female_wrapper">
							<div class="female_item">
								<p><span>58%</span><br/>Женщин</p>
							</div>
						</div>
						<div class="grafic_wrapper">
							<div class="grafic_item">
								<img src="/wp-content/uploads/2020/11/grafik.png" alt="" />
							</div>
						</div>
						<div class="male_wrapper">
							<div class="male_item">
								<p><span>42%</span><br/>Мужчин</p>
							</div>
						</div>
					</div>
					<div class="ages_wrapper flex_row justifi_sb">
						<div class="age_item_wrapper">
							<div class="age_item stage">
								<p><span>5 лет</span><br/><br/>Средний стаж<br/> работы в компании</p>
							</div>
						</div>
						<div class="age_item_wrapper">
							<div class="age_item vozrast">
								<p><span>35 лет</span><br/><br/>Средний возраст<br/> сотрудника</p>
							</div>
						</div>
					</div>
				</section>
				<section class="section_wrapper value_wrapper">
					<h2>Наши ценности</h2>
					<div class="value flex_row justifi_sb">
						<div class="value_image first_value">
							<img src="/wp-content/uploads/2020/11/value1.png" alt="" />
						</div>
						<div class="value_text">
							<div class="value_text_block first_value">
								<h5>Быть настоящим,<br/> открытым и честным</h5>	
								<p>Естественность во всем – наша<br/> жизненная позиция</p>
							</div>
						</div>
					</div>
					<div class="value flex_row justifi_sb column_mob_reverse">
						<div class="value_text">
							<div class="value_text_block">
								<h5>Развиваться,<br/> совершенствоваться<br/>и открываться новому</h5>	
								<p>Нам важно каждый день делать что-то новое,<br/> замечать необычное, постоянно совершенствовать<br/> свои умения</p>
							</div>
						</div>
						<div class="value_image">
							<img src="/wp-content/uploads/2020/11/value2.png" alt="" />
						</div>
					</div>
					<div class="value flex_row justifi_sb">
						<div class="value_image">
							<img src="/wp-content/uploads/2020/11/value3.png" alt="" />
						</div>
						<div class="value_text">
							<div class="value_text_block">
								<h5>Быть креативным,<br/> любознательным,<br/> вовлеченным</h5>	
								<p>Создание удивительных, не<br/> имеющих аналогов, продуктов –<br/> наша любимая задача.</p>
							</div>
						</div>
					</div>
					<div class="value flex_row justifi_sb column_mob_reverse">
						<div class="value_text">
							<div class="value_text_block">
								<h5>Быть уверенным в себе<br/> и в команде</h5>	
								<p>В нашей команде трудятся люди с горящими глазами,<br/> искренние и всегда готовые помочь.</p>
							</div>
						</div>
						<div class="value_image">
							<img src="/wp-content/uploads/2020/11/value4.png" alt="" />
						</div>
					</div>
					<div class="value flex_row justifi_sb">
						<div class="value_image">
							<img src="/wp-content/uploads/2020/11/value5.png" alt="" />
						</div>
						<div class="value_text">
							<div class="value_text_block">
								<h5>Быть ответственным,<br/> упорным, нацеленным<br/> на результат</h5>	
								<p>Благодаря системе управления качеством в<br/> компании использование средств SPLAT приносит<br/> удовольствие и гарантированный результат.</p>
							</div>
						</div>
					</div>
					<div class="value flex_row justifi_sb column_mob_reverse">
						<div class="value_text">
							<div class="value_text_block">
								<h5>Любить свое дело<br/>и быть в нем лучшим</h5>	
								<p>Мы стремимся сохранить теплые и открытые<br/> отношения, доверительные и искренние: не для<br/> соревнования, а для сотворчества.</p>
							</div>
						</div>
						<div class="value_image">
							<img src="/wp-content/uploads/2020/11/value6.png" alt="" />
						</div>
					</div>
					<div class="value flex_row justifi_sb">
						<div class="value_image">
							<img src="/wp-content/uploads/2020/11/value7.png" alt="" />
						</div>
						<div class="value_text">
							<div class="value_text_block">
								<h5>Быть оптимистичным<br/> и верить в любовь</h5>	
								<p>Нас объединяют оптимизм и желание изменить<br/> мир к лучшему. Мы верим в любовь, ценим<br/> естественность и стараемся получать радость от<br/> каждого дня.</p>
							</div>
						</div>
						
					</div>
				</section>
				<script>
					$(document).ready(function(){
						//Табы
						$("ul.tabs__caption").on("click", "li:not(.active)", function() {
							$(this)
							.addClass("active")
							.siblings()
							.removeClass("active")
							.closest("div.tabs")
							.find("div.tabs__content")
							.removeClass("active")
							.eq($(this).index())
							.addClass("active");
						});
						//Аккордеон
						$('.accordion > li:eq(0) a').addClass('active').next().slideDown();
						$('.accordion a').click(function(j) {
							var dropDown = $(this).closest('li').find('ul');
							$(this).closest('.accordion').find('ul').not(dropDown).slideUp();
							if ($(this).hasClass('active')) {
								$(this).removeClass('active');
							} else {
								$(this).closest('.accordion').find('a.active').removeClass('active');
								$(this).addClass('active');
							}
							dropDown.stop(false, true).slideToggle();
							j.preventDefault();
						});
						//Попапы
						$('p.open_vacancy').click(function () {
							$('p.open_vacancy').removeClass('open');
							$('.vacancy_modal').fadeOut(100);	
							$('div.'+$(this).attr("rel")).fadeIn(500).addClass('open');
							$(this).addClass('open');			
						});	
						$('div.close_vacancy').click(function () {
							$(this).parent().fadeOut(100);
							return false;
						});
					});
				</script>
				<!-- работать здесь end -->

                        <?
                        $content = ob_get_clean();
                        echo splat_apply_meta_on_content($content);
                        //the_content();

                    ?>
            </div><!-- .section-inner -->

        </article><!-- .post -->
    <?endif;?>

<?php get_footer(); ?>
