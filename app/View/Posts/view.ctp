<style>
.social{
float: right;
}
.sky-form {
	margin: 0;
	outline: none;
	box-shadow: 0 0 0 rgba(0,0,0,0);
	font: 13px/1.55 'Open Sans', Helvetica, Arial, sans-serif;
	color: #666;
	border: 0px solid #eee;
	width: 115%;
}
.sky-form fieldset {
  display: block;
   padding: 0px 0px 0px;
  border: none;
  background: rgba(255,255,255,.9);
}
.col-md-4{
{
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 0px;
}
.col-md-6 {
  width: auto;
}
}
</style>
<div class="container content">
	<div class="row magazine-page">
		<!-- Begin Content -->
		<div class="col-md-9">
			<h2 class="color-blue"><b> <?php echo ($post['Post']['title']);;  ?></h2>

			<div class="funny-boxes funny-boxes-top-purple bg-color-white">

				<div class="row">
					<div class="col-md-8">
						<div class="by-author">
							<span> Ngày tạo: <?php echo ($post['Post']['created']);  ?></span>
						</div>
						<ul class="list-unstyled funny-boxes-rating">
							Đánh giá
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>
					</div>
					<div class="social">
						<span><i><?php echo 'Phản hồi, bình luận về bài viết: '. substr(str_shuffle("123456789"), 0, 3);?></i></span>  
						<ul class="social-icons">
							<li><a href="https://www.facebook.com/360newdays" data-original-title="Facebook"
								class="rounded-x social_facebook" target = _blank></a></li>
							<li><a href="https://twitter.com/360daysss" data-original-title="Twitter"
								class="rounded-x social_twitter" target = _blank></a></li>
							<li><a href="#" data-original-title="Goole Plus"
								class="rounded-x social_googleplus"></a></li>
						</ul>
					</div>
				</div>
				<br>
				</div> 
                <div class="col-md-12 margin-top-30">                    
				<span><?php echo ($post['Post']['body']);?></span>
				<br>
				<br>
				<br>
				</div>
			
			<div class="margin-bottom-5 margin-top-30">
				<hr class="hr-md">
			</div>
			<span><i><b><?php echo 'Bài viết liên quan:'?></b></i></span>
			<ul>
				<li><?php
					 echo $this->Html->link ( $posts[1] ['Post'] ['title'], array (
                                                                          'controller' => 'posts',
                                                                          'action' => 'view',
                                                                          $posts[1] ['Post'] ['id']
                                                                          ) );
					?> </li>
				<li><?php 
                                            echo $this->Html->link ( $posts[2] ['Post'] ['title'], array (
                                                                             'controller' => 'posts',
                                                                             'action' => 'view',
                                                                             $posts[2] ['Post'] ['id']
                                                                             ) );
                                           ?> </li>
				<li><?php 
                                            echo $this->Html->link ( $posts[3] ['Post'] ['title'], array (
                                                                             'controller' => 'posts',
                                                                             'action' => 'view',
                                                                             $posts[3] ['Post'] ['id']
                                                                             ) );
                                           ?> </li>
				<li><?php 
                                            echo $this->Html->link ( $posts[4] ['Post'] ['title'], array (
                                                                             'controller' => 'posts',
                                                                             'action' => 'view',
                                                                             $posts[4] ['Post'] ['id']
                                                                             ) );
                                           ?> </li>
				<li><?php 
                                            echo $this->Html->link ( $posts[5] ['Post'] ['title'], array (
                                                                             'controller' => 'posts',
                                                                             'action' => 'view',
                                                                             $posts[5] ['Post'] ['id']
                                                                             ) );
                                           ?> </li>
				<li><?php 
                                            echo $this->Html->link ( $posts[6] ['Post'] ['title'], array (
                                                                             'controller' => 'posts',
                                                                             'action' => 'view',
                                                                             $posts[6] ['Post'] ['id']
                                                                             ) );
                                           ?> </li>
				<li><?php 
                                            echo $this->Html->link ( $posts[7] ['Post'] ['title'], array (
                                                                             'controller' => 'posts',
                                                                             'action' => 'view',
                                                                             $posts[7] ['Post'] ['id']
                                                                             ) );
                                           ?> </li>		
				<li><?php 
                                            echo $this->Html->link ( $posts[8] ['Post'] ['title'], array (
                                                                             'controller' => 'posts',
                                                                             'action' => 'view',
                                                                             $posts[8] ['Post'] ['id']
                                                                             ) );
                                           ?> </li>
				<li><?php 
                                            echo $this->Html->link ( $posts[9] ['Post'] ['title'], array (
                                                                             'controller' => 'posts',
                                                                             'action' => 'view',
                                                                             $posts[9] ['Post'] ['id']
                                                                             ) );
                                           ?> </li>
				<li><?php 
                                            echo $this->Html->link ( $posts[10] ['Post'] ['title'], array (
                                                                             'controller' => 'posts',
                                                                             'action' => 'view',
                                                                             $posts[10] ['Post'] ['id']
                                                                             ) );
                                           ?> </li>
			</ul>
			
				
			<br>
			<div class="fb-like" data-href="https://www.facebook.com/360newdays" ></div>
			<div class="fb-share-button" data-href="https://www.facebook.com/360newdays" data-layout="box_count"></div>
			<div class="margin-bottom-10">
				<hr class="hr-md">
			</div>
			<div class="col-md-4">
			<form class="sky-form">
				<fieldset>                  
                        <section>
                            <div class="rating">
                            <div class="social">
                                <button class="btn-u btn-u-xs btn-u-blue" type="button"><?php echo 'Gửi đi'?></button>
                            	</div>
                                <input type="radio" name="stars-rating" id="stars-rating-5">
                                <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-4">
                                <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-3">
                                <label for="stars-rating-3"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-2">
                                <label for="stars-rating-2"><i class="fa fa-star"></i></label>
                                <input type="radio" name="stars-rating" id="stars-rating-1">
                                <label for="stars-rating-1"><i class="fa fa-star"></i></label>
                                <span><b><i><?php echo 'Đánh giá bài báo: '?></i></b></span>
                            </div>   
                            
                        </section>
                        
                    </fieldset>
               </form>
              </div>      
			<div class="margin-bottom-10">
				<hr class="hr-md">
			</div>
			<span><b><i><?php echo 'Bình luận: '?></i></b></span>
			<div class="fb-comments" data-href="https://www.facebook.com/360newdays" data-width="800" data-numposts="20"></div>
		</div>
		<!-- End Content -->

		<!-- Begin Sidebar -->
		<div class="col-md-3">
			<!-- Facebook API -->
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
 				 var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
 					 js = d.createElement(s); js.id = id;
 					 js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
 					 fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-page" data-href="https://www.facebook.com/360newdays"
				data-width="292" data-height="210" data-small-header="false"
				data-adapt-container-width="true" data-hide-cover="false"
				data-show-facepile="true" data-show-posts="false">
				<div class="fb-xfbml-parse-ignore">
					<blockquote cite="https://www.facebook.com/360newdays">
						<a href="https://www.facebook.com/360newdays">360days.net</a>
					</blockquote>
				</div>
			</div>
			<!-- End Facebook API -->
			<hr>
			<!-- Right magazine 1-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[0] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[0]['Post']['image'];?>" alt=""></a> 	
								<span
								class="magazine-badge label-red">Âm Nhạc </span>
								
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[0] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[0] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[1] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[1]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[1] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[1] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[2] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[2]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[2] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[2] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[3] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[3]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[3] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[3] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[4] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[4]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[4] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[4] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				<!--  END Magazine 1-->
		<hr>
			
			<!-- Right magazine 2-->
			
			<div class="row margin-bottom-10 margin-left-5">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
						<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[5] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[5]['Post']['image'];?>" alt=""></a> 	
								<span
								class="magazine-badge label-blue">Phim Ảnh </span>
								
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[5] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[1] ['Post'] ['id'] 
									) );
								?>
					</h3>	
					</div>
					<ul class="list-unstyled blog-photos margin-bottom-15 margin-left-10">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[6] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[6]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[6] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[6] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[7] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[7]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[7] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[7] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[8] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[8]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[8] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[8] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[9] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[9]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[9] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[9] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 2-->
				
				<!-- Right magazine 3-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[10] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[10]['Post']['image'];?>" alt=""></a> 	
								<span
								class="magazine-badge label-blue"><?php echo $posts[10]['Post']['theloai'];?> </span>
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[10] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[2] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[11] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[11]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[11] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[11] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[12] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[12]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[12] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[12] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[13] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[13]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[13] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[13] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[14] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[14]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[14] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[14] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 3-->
					<!-- Right magazine 4-->		
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[15] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[15]['Post']['image'];?>" alt=""></a> 	
								<span
								class="magazine-badge label-blue"><?php echo $posts[15]['Post']['theloai'];?> </span>
								
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[15] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[15] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[16] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[16]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[16] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[16] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[17] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[17]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[17] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[17] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[18] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[18]['Post']['image'];?>" alt=""></a> 
								
								
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[18] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[18] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[19] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[19]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[19] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[19] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 4-->
				
					<!-- Right magazine 5-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[20] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[20]['Post']['image'];?>" alt=""></a> 
								<span
								class="magazine-badge label-blue"> <?php echo $posts[20]['Post']['theloai'];?> </span>	
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[20] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[20] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[21] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[21]['Post']['image'];?>" alt=""></a> 	
								
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[21] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[21] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[22] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[22]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[22] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[22] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[23] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[23]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[23] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[23] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[24] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[24]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[24] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[24] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 5-->
					<!-- Right magazine 6-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[25] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[25]['Post']['image'];?>" alt=""></a> 	
								<span
								class="magazine-badge label-blue"><?php echo $posts[25]['Post']['theloai'];?> </span>	
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[25] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[25] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[26] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[26]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[26] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[26] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[27] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[27]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[27] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[27] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[28] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[28]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[28] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[28] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[29] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[29]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[29] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[29] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 6-->
				
					<!-- Right magazine 7-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[30] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[30]['Post']['image'];?>" alt=""></a> 
								<span
								class="magazine-badge label-blue"><?php echo $posts[30]['Post']['theloai'];?> </span>		
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[30] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[30] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[31] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[31]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[31] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[31] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[32] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[32]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[32] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[32] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[33] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[33]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[33] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[33] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[34] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[34]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[34] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[34] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 8-->
				
					<!-- Right magazine 9-->
			
			
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[35] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[35]['Post']['image'];?>" alt=""></a> 	
								<span
								class="magazine-badge label-blue"><?php echo $posts[35]['Post']['theloai'];?> </span>
									
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[35] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[35] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[36] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[36]['Post']['image'];?>" alt=""></a> 	
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[36] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[36] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[37] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[37]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[37] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[37] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[38] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[38]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[38] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[3] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[39] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[39]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[39] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[39] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 9-->
				<!-- Right magazine 10-->
			<div class="row margin-bottom-10">
				<div class="magazine-posts col-md-12 col-sm-6 margin-bottom-10">
					
					<div class="magazine-posts-img margin-bottom-10">
						<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[40] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[40]['Post']['image'];?>" alt=""></a> 
								<span
								class="magazine-badge label-blue"><?php echo $posts[40]['Post']['theloai'];?> </span>	
					</div>
					<h3>
						<?php			
							echo $this->Html->link ( $posts[40] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[40] ['Post'] ['id'] 
									) );
								?>
					</h3>
					<ul class="list-unstyled blog-photos margin-bottom-15">
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[41] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[41]['Post']['image'];?>" alt=""></a> 	
								
								
                    	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[41] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[41] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[42] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[42]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[42] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[42] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[43] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[43]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[43] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[43] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <li class="margin-bottom-5">
                    <div class="row">
                    
                    	<div class="col-md-4">
                    	<a href="<?php
								echo $this->Html->url (array('controller' => 'posts', 'action' => 'view', $posts[44] ['Post'] ['id'] ))
							?>
							"><img class="img-responsive"
								src="<?php echo $posts[44]['Post']['image'];?>" alt=""></a> 	
                      	</div>
                      	<div class="col-md-8">
                      	<h6><b><?php			
							echo $this->Html->link ( $posts[44] ['Post'] ['title'], array (
									'controller' => 'posts',
									'action' => 'view',
									$posts[44] ['Post'] ['id'] 
									) );
								?></b></h6>
                      	</div>
                      </div>
                    </li>
                    <br>
                </ul>
				</div>
				</div>
				<!--  END Magazine 10-->

		</div>
		<!-- End Sidebar -->
	</div>
</div>
