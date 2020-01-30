<?php if($displayBooks): ?>
	
	<?php $__currentLoopData = $displayBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?></p>
	
	<section class="book_one">
    	<div class="container">
    		<div class="row">
    			<div class="col-6 col-md-3 col-sm-6 col-xs-6">
    				<h6 class="title_txt_1"><?php echo e($book->book_title); ?></h6>
    			</div>
    
    			<div class="col-6 col-md-3 col-sm-6 col-xs-6">
    				<h6 class="title_txt_1"><?php echo e($book->story_title_link); ?></h6>
    			</div>
    
    			<div class="col-6 col-md-3 col-sm-6 col-xs-6">
    				<h6 class="title_txt_1"><?php echo e($book->page_number); ?></h6>
    			</div>
    
    			<div class="col-6 col-md-3 col-sm-6 col-xs-6">
    				<h6 class="title_txt_1"><?php echo e($book->resource_type); ?></h6>
    			</div>
    		</div>
    
    		<div class="author_main">
    			<div class="row">
    				<div class="col-md-4">
    					<div class="author_box">
    						<img src="<?php echo e(asset('public/assets/images/author_img.png')); ?>" alt="" style="width: 300px;">
    					</div>
    				</div>
    
    				<div class="col-md-8">
    					<div class="cont_txt">
    						<h3 class="title_txt_1"><?php echo e($book->authors); ?></h3>    
    						<h4 class=" title_txt_1"><?php echo e($book->published_date); ?></h4>

                            <p class="lorem_txt title_txt_1"><?php echo e($book->maori_story_summary); ?></p>

                            <a href="<?php echo e($book->link); ?>" class="title_txt_1" target="_blank"><?php echo e($book->link); ?></a>

                            <div class="row">
                                <div class="col-6 col-md-6 col-sm-6 col-xs-6">
                                    <h6 class="title_txt_1"><?php echo e($book->curriculum_level); ?></h6>
                                </div>
                    
                                <div class="col-6 col-md-6 col-sm-6 col-xs-6">
                                    <h6 class="title_txt_1"><?php echo e($book->text_type); ?></h6>
                                </div>
                            </div>

    						<a class="btn readbtn">Read More</a>
    						
    						<div class="divReadmore" style="display: none;">
                                
                                <p class="lorem_txt title_txt_1"><?php echo e($book->english_story_summary); ?></p>

                                <p class="lorem_txt title_txt_1"><?php echo e($book->english_book_summary); ?></p>
                                <p class="lorem_txt title_txt_1"><?php echo e($book->maori_book_summary); ?></p>
    						
    							<p class="lorem_txt"><?php echo e($book->pages); ?></p>
    							<p class="lorem_txt"><?php echo e($book->word_length); ?></p>
    							<p class="lorem_txt"><?php echo e($book->series); ?></p>
    							<p class="lorem_txt"><?php echo e($book->isbn); ?></p>
    							
    						</div>
    						
    						<h3 class="name_author"> </h3>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
	
<?php else: ?>

<p> No Result Found !!!</p>
	
<?php endif; ?>

<div id="grid"></div>



