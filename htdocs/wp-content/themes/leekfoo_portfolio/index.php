<?php get_header(); ?>
<article>
		<div id="top_title" class="valign-wrapper teal lighten-3">
		    <?php include("index_firstview.php"); ?>
		</div>
		<div id="about" class="section valign-wrapper" data-aos="fade-up">
			<div class="container">
                <div id="profile">
                    <h3 class="center-align">Profile</h3>
                    <div class="about_profile row">
                        <div id="profile_image" class="center-align col s12 m4">
                            <img class="responsive-img circle" alt="プロフィール画像" src="<?php echo get_template_directory_uri(); ?>/img/profile.png">
                        </div>
                        <div class="col s12 m8 mt20">
                            LeekFooと申します。<br>
                            これまで約3年間Web業界でWebプログラマとして勤務し、LAMP環境で動作するWebアプリケーションやソーシャルゲームの開発を行ってきました。<br>
                            仕事ではPHPを使用することが多いですが、最近は競技プログラミングを始め、C++の勉強もしています。<br>
                            近頃はクラウドIDEを使用した開発環境構築の虜です。<br><br>
                            <a class="valign-wrapper profile_account" href="https://github.com/LeekFoo" target="_blank"><i class="fab fa-github fa-3x"></i>LeekFoo</a>
                        </div>
                    </div>
                </div>
			</div>
		</div>

        <div id="portfolio_projects" class="section valign-wrapper" data-aos="fade-up">
			<div class="container">
				<h3 class="center-align">制作物</h3>
                <div class="row">
                <?php // TODO 制作物タグが付いてい投稿のみを表示するようにする ?>
                    <div class="col s12 m4 offset-m4">
                        <div class="card hoverable modal-trigger" data-target="product_1">
                            <div class="card-image">
                                <img src="http://52.199.141.213/wp-content/uploads/2019/12/portfolio_pc.png" />
                                <span class="card-title">Portfolio</span>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
        <!-- 制作物1 -->
        <div id="product_1" class="modal">
            <div class="modal-content">

                <div class="row">
                    <div class="col s12 m5">
                        <h4>Portfolio</h4>
                        <div class="description mb30">
                            このWebページになります。<br>
                            これまでの仕事でCSSフレームワークはBootstrapを主に使用していましたが、マテリアルデザインに特化した「Materialize」を使用して構築しました。<br>
                            もっと動きのあるページにし、見ていて楽しいページにしていきたいと考えております。
                            <ul>
                                <li><a href="https://leekfoo.github.io/portfolio/" target="_blank"><i class="fas fa-desktop"></i>Demo</a></li>
                                <li><a href="https://github.com/LeekFoo/portfolio" target="_blank"><i class="fab fa-github"></i>github</a></li>
                            </ul>
                        </div>
                        <h5>開発環境</h5>
                        <div class="description">
                            <ul>
                                <li>Wordpress</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript(jQuery)</li>
                                <li>Materialize</li>
                                <li>AOS</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s12 m7">
                        <ul class="modal_images">
                            <li><img src="http://52.199.141.213/wp-content/uploads/2019/12/portfolio_pc.png" /></li>
                            <li><img src="http://52.199.141.213/wp-content/uploads/2019/12/portfolio_top.png" /></li>
                            <li><img src="http://52.199.141.213/wp-content/uploads/2019/12/portfolio_profile.png" /></li>
                            <li><img src="http://52.199.141.213/wp-content/uploads/2019/12/portfolio_sp.png" /></li>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="#!" class="modal-close waves-effect waves-green btn-flat"><i class="fas fa-times"></i></a>
        </div>

		<div id="portfolio_skill" class="section valign-wrapper" data-aos="fade-up">
			<div class="container">
                <div id="skill_set_content">
                    <h3 class="center-align">スキル</h3>
                    <div class="row">
                        <div class="backend_skill col s12">
                            <h4>バックエンド</h4>
                            <div class="row skill_header">
                                <div class="skill_name col s6 m4">技術</div>
                                <div class="skill_experience col s6 m4">経験年数</div>
                                <div class="col s12 m4">スキル</div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">PHP&nbsp;5.6,&nbsp;7</div>
                                <div class="skill_experience col s6 m4">3年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 75%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">Zend Framework</div>
                                <div class="skill_experience col s6 m4">3年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 70%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">Laravel</div>
                                <div class="skill_experience col s6 m4">1年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 40%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">Symfony</div>
                                <div class="skill_experience col s6 m4">2年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 60%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">EC-CUBE3系</div>
                                <div class="skill_experience col s6 m4">3年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="frontend_skill col s12 m6">
                            <h4>フロントエンド</h4>
                            <div class="row skill_header">
                                <div class="skill_name col s6 m4">技術</div>
                                <div class="skill_experience col s6 m4">経験年数</div>
                                <div class="col s12 m4">スキル</div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">JavaScript</div>
                                <div class="skill_experience col s6 m4">3年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 70%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">jQuery</div>
                                <div class="skill_experience col s6 m4">3年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 70%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">AngularJS</div>
                                <div class="skill_experience col s6 m4">半年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 25%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="other_skill col s12 m6">
                            <h4>デザイン</h4>
                            <div class="row skill_header">
                                <div class="skill_name col s6 m4">技術</div>
                                <div class="skill_experience col s6 m4">経験年数</div>
                                <div class="col s12 m4">スキル</div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">HTML5</div>
                                <div class="skill_experience col s6 m4">3年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">CSS3</div>
                                <div class="skill_experience col s6 m4">3年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 80%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">Photoshop</div>
                                <div class="skill_experience col s6 m4">1年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 60%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">Illustrator</div>
                                <div class="skill_experience col s6 m4">1年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 50%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="other_skill col s12 m6">
                            <h4>DB</h4>
                            <div class="row skill_header">
                                <div class="skill_name col s6 m4">技術</div>
                                <div class="skill_experience col s6 m4">経験年数</div>
                                <div class="col s12 m4">スキル</div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">MySQL</div>
                                <div class="skill_experience col s6 m4">3年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 60%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">PostgleSQL</div>
                                <div class="skill_experience col s6 m4">半年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 30%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="other_skill col s12 m6">
                            <h4>インフラ・サーバー</h4>
                            <div class="row skill_header">
                                <div class="skill_name col s6 m4">技術</div>
                                <div class="skill_experience col s6 m4">経験年数</div>
                                <div class="col s12 m4">スキル</div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">Apache</div>
                                <div class="skill_experience col s6 m4">3年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 50%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">AWS</div>
                                <div class="skill_experience col s6 m4">半年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 40%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="other_skill col s12 m6">
                            <h4>その他</h4>
                            <div class="row skill_header">
                                <div class="skill_name col s6 m4">技術</div>
                                <div class="skill_experience col s6 m4">経験年数</div>
                                <div class="col s12 m4">スキル</div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">Git</div>
                                <div class="skill_experience col s6 m4">3年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 55%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">github</div>
                                <div class="skill_experience col s6 m4">半年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 40%;"></div>
                                </div>
                            </div>
                            <div class="row skill">
                                <div class="skill_name col s6 m4">SVN</div>
                                <div class="skill_experience col s6 m4">半年</div>
                                <div class="skill_bar_wrap col s12 m4">
                                    <div class="skill_bar" style="width: 30%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</article><!--end contents-->
  <?php get_sidebar(); ?>
</div><!--end container-->
<?php get_footer(); ?>
