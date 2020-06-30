							{{-- memberi tahu menggunakan method patch --}}
							@method('patch')
							@csrf
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