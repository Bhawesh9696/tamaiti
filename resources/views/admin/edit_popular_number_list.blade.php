@extends('admin.layout.master')
@section('title','Excel Sheet List')
@section('content')	

@php



$jlanguage = ''; $jtaumata_marautanga = ''; $jtaumata_panui = ''; $jcurriculum_level = ''; $jreading_level = ''; $jorganizationType = ''; $jbook_title = ''; $jlink = ''; $jstory_title_link = ''; $jauthors = ''; $jpublished_date = ''; $jpublisher = ''; $jisbn = ''; $jpage_number = ''; $jpages = ''; $jword_length = ''; $jseries = ''; $jresource_type = ''; $jtext_type = ''; $jmaori_story_summary = ''; $jenglish_story_summary = ''; $jmaori_book_summary = ''; $jenglish_book_summary = ''; $jbook_image_link = ''; $jmaori_topic = ''; $jenglish_topic = ''; $jwaka_canoe = ''; $jiwi_tribe = ''; $jhapu_village = ''; $jimportant_person = ''; $jlearning_area = ''; $jwahanga_ako = '';

if(isset($request))

{

	$jlanguage = $request->language; 
	$jtaumata_marautanga = $request->taumata_marautanga; 
	$jtaumata_panui = $request->taumata_panui;
	$jcurriculum_level = $request->curriculum_level;
	$jreading_level = $request->reading_level; 
	$jbook_title = $request->book_title; 
	$jlink = $request->link;
	$jstory_title_link = $request->story_title_link;
	$jauthors = $request->authors;
	$jpublished_date = $request->published_date;
	$jpublisher = $request->publisher;
	$jisbn = $request->isbn;
	$jpage_number = $request->page_number;
	$jpages = $request->pages;
	$jword_length = $request->word_length;
	$jseries = $request->series;
	$jresource_type = $request->resource_type;
	$jtext_type = $request->text_type;	
	$jmaori_story_summary = $request->maori_story_summary;
	$jenglish_story_summary = $request->english_story_summary;
	$jmaori_book_summary = $request->maori_book_summary;
	$jenglish_book_summary = $request->english_book_summary;
	$jbook_image_link = $request->book_image_link;
	$jmaori_topic = $request->maori_topic_1_topic_2_topic_3;
	$jenglish_topic = $request->english_topic_1_topic_2_topic_3;
	$jwaka_canoe = $request->waka_canoe_1_waka_canoe_2;
	$jiwi_tribe = $request->iwi_tribe_1_iwi_tribe_2;
	$jhapu_village = $request->hapu_village_1_hapu_village_2;
	$jimportant_person = $request->important_person_1_important_person_2;
	$jlearning_area = $request->learning_area_1_learning_area_2_learning_area_3;
    $jwahanga_ako = $request->wahanga_ako_1_wahanga_ako_2_wahanga_ako_3;
}

@endphp

<div class="main-content">
	<div class="container-fluid">
		<div class="breadcrumb-wrapper row">
			<div class="col-12 col-lg-9 col-md-6">
				<ol class="breadcrumb float-right">
					<li><a href="{{url('/admin/dashboard')}}">Dashboard</a>
					</li>
					<li><a href="{{url('/admin/popular-number-list')}}">/ Excel Sheet Listing</a>
					</li>
					<li class="active">/ View Excel Sheet</li>
				</ol>
			</div>
		</div>
	</div>
	<div class="container-fluid">					
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header border-bottom">
						<h4 class="card-title" style="color:#e22a6f;">Edit</h4>
						<center>
							@if(Session::has('success'))
	                            <div class="alert alert-success">
	                                {{ Session::get('success') }}
	                            </div>
                            @endif
                        </center> 
					</div>
					<div class="card-body">
						<form action="{{ $action }} " method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>Language</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="language" value="{{ trim($jlanguage) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>Taumata Marautanga</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="taumata_marautanga" value="{{ trim($jtaumata_marautanga) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Curriculum Level</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="curriculum_level" value="{{ trim($jcurriculum_level) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Reading Level</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="reading_level" value="{{ trim($jreading_level) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Book Title</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="book_title" value="{{ trim($jbook_title) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Link</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="link" value="{{ trim($jlink) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Story Title Link</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="story_title_link" value="{{ trim($jstory_title_link) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Authors</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="authors" value="{{ trim($jauthors) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Published Date</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="published_date" value="{{ trim($jpublished_date) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Publisher</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="publisher" value="{{ trim($jpublisher) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	ISBN</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="isbn" value="{{ trim($jisbn) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Page Number</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="page_number" value="{{ trim($jpage_number) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Pages</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="pages" value="{{ trim($jpages) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Word Length</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="word_length" value="{{ trim($jword_length) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Series</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="series" value="{{ trim($jseries) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Resource Type</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="resource_type" value="{{ trim($jresource_type) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Text Type</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="text_type" value="{{ trim($jtext_type) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Maori Story Summary</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="maori_story_summary" value="{{ trim($jmaori_story_summary) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	English Story Summary</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="english_story_summary" value="{{ trim($jenglish_story_summary) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Maori Book Summary</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="maori_book_summary" value="{{ trim($jmaori_book_summary) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	English Book Summary</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="english_book_summary" value="{{ trim($jenglish_book_summary) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Book Image Link</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="book_image_link" value="{{ trim($jbook_image_link) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Maori Topics (topic_1,topic_2,topic_3) </label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="maori_topic_1_topic_2_topic_3" value="{{ trim($jmaori_topic) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	English Topics (topic_1,topic_2,topic_3)</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="english_topic_1_topic_2_topic_3" value="{{ trim($jenglish_topic) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Waka Canoe (waka_canoe_1,waka_canoe_2) </label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="waka_canoe_1_waka_canoe_2" value="{{ trim($jwaka_canoe) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Iwi Tribe (iwi_tribe_1,iwi_tribe_2)</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="iwi_tribe_1_iwi_tribe_2" value="{{ trim($jiwi_tribe) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Hapu Village (hapu_village_1,hapu_village_2)</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="hapu_village_1_hapu_village_2" value="{{ trim($jhapu_village) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Important Person (important_person_1,important_person_2)</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="important_person_1_important_person_2" value="{{ trim($jimportant_person) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Learning Area (learning_area_1,learning_area_2,learning_area_3)</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="learning_area_1_learning_area_2_learning_area_3" value="{{ trim($jlearning_area) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
									    <label>	Wahanga Ako (wahanga_ako_1,wahanga_ako_2,wahanga_ako_3)</label>
									</div>
									<div class="col-md-8">
									    <input type="text" class="form-control" name="wahanga_ako_1_wahanga_ako_2_wahanga_ako_3" value="{{ trim($jwahanga_ako) }}" maxlength="100"  >
									</div>
								</div>
							</div>

							<div class="form-group" style="margin-top: 20px;">
								<input type="submit" class="btn btn-primary" value="Submit" name="btn_btn_add_product">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('javascript')

@endsection

