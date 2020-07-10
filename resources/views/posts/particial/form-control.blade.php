							

							<div class="form-group">
								<label for="title"> title</label>
								<input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title')?? $post->title}}">
								{{-- menampilkan error validation --}}
								@error('title')
								<div class="mt-3 invalid-feedback" >
									{{$message}}
								</div>
									
								@enderror
							</div>



							<div class="form-group">
								<label for="category">Category</label>
								<select name="category" id="category" class="form-control @error('category') is-invalid @enderror"> 
								<option disabled selected >Chose one</option>
									@foreach( $categories as $category)
										<option {{$category->id == $post->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
								
								</select>
								{{-- menampilkan error validation --}}
								@error('category')
								<div class="mt-3 invalid-feedback" >
									{{$message}}
								</div>
									
								@enderror
							</div>




							<div class="form-group">
								<label for="tags">Tag</label>
								{{-- multiple di gunakan untuk input lebih dari 1 
									tags[] = memberitahu kalau itu adalah array
									--}}
								<select name="tags[]" id="tags" class="form-control tag @error('tags') is-invalid @enderror" multiple> 
								
									@foreach( $post->tags as $tag)
										<option selected value="{{$tag->id}}">{{$tag->name}}</option>
									@endforeach

									@foreach( $tags as $tag)
										<option value="{{$tag->id}}">{{$tag->name}}</option>
									@endforeach
								
								</select>
								{{-- menampilkan error validation --}}
								@error('tags')
								<div class="mt-3 invalid-feedback" >
									{{$message}}
								</div>
									
								@enderror
							</div>



							<div class="form-group">
								<label for="body"> Body</label>
								<textarea type="text" name="body" id="body" class="form-control @error('body') is-invalid @enderror">{{ old('body') ?? $post->body}}</textarea>

								{{-- menampilkan error validation --}}
								@error('body')
								<div class="mt-3 invalid-feedback" >
									{{$message}}
								</div>
									
								@enderror

							</div>

							<button type="submit" class="btn btn-primary">{{ $submit ??'Update'}}</button>