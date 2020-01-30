@if($displayBooks)
	
	@foreach($displayBooks as $book)</p>
	
	<section class="book_one">
    	<div class="container">
    		<div class="row">
    			<div class="col-6 col-md-3 col-sm-6 col-xs-6">
    				<h6 class="title_txt_1">{{ $book->book_title }}</h6>
    			</div>
    
    			<div class="col-6 col-md-3 col-sm-6 col-xs-6">
    				<h6 class="title_txt_1">{{ $book->story_title_link }}</h6>
    			</div>
    
    			<div class="col-6 col-md-3 col-sm-6 col-xs-6">
    				<h6 class="title_txt_1">{{ $book->page_number }}</h6>
    			</div>
    
    			<div class="col-6 col-md-3 col-sm-6 col-xs-6">
    				<h6 class="title_txt_1">{{ $book->resource_type }}</h6>
    			</div>
    		</div>
    
    		<div class="author_main">
    			<div class="row">
    				<div class="col-md-4">
    					<div class="author_box">
    						<img src="{{ asset('public/assets/images/author_img.png') }}" alt="" style="width: 300px;">
    					</div>
    				</div>
    
    				<div class="col-md-8">
    					<div class="cont_txt">
    						<h3 class="title_txt_1">{{ $book->authors }}</h3>    
    						<h4 class=" title_txt_1">{{ $book->published_date }}</h4>

                            <p class="lorem_txt title_txt_1">{{ $book->maori_story_summary }}</p>

                            <a href="{{ $book->link }}" class="title_txt_1" target="_blank">{{ $book->link }}</a>

                            <div class="row">
                                <div class="col-6 col-md-6 col-sm-6 col-xs-6">
                                    <h6 class="title_txt_1">{{ $book->curriculum_level }}</h6>
                                </div>
                    
                                <div class="col-6 col-md-6 col-sm-6 col-xs-6">
                                    <h6 class="title_txt_1">{{ $book->text_type }}</h6>
                                </div>
                            </div>

    						<a class="btn readbtn">Read More</a>
    						
    						<div class="divReadmore" style="display: none;">
                                
                                <p class="lorem_txt title_txt_1">{{ $book->english_story_summary }}</p>

                                <p class="lorem_txt title_txt_1">{{ $book->english_book_summary }}</p>
                                <p class="lorem_txt title_txt_1">{{ $book->maori_book_summary }}</p>
    						
    							<p class="lorem_txt">{{ $book->pages }}</p>
    							<p class="lorem_txt">{{ $book->word_length }}</p>
    							<p class="lorem_txt">{{ $book->series }}</p>
    							<p class="lorem_txt">{{ $book->isbn }}</p>
    							
    						</div>
    						
    						<h3 class="name_author"> </h3>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	@endforeach
	
	
@else

<p> No Result Found !!!</p>
	
@endif

<div id="grid"></div>



