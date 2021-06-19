<div class="form-group row">
    <label class="col-md-4 text-right" for="title">Title: </label>
    <div class="col-md-8">
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="@isset ($movie){{ $movie->title }}@else{{ old('title') }}@endisset">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="starring">Starring: </label>
    <div class="col-md-8">
        <textarea class="form-control @error('starring') is-invalid @enderror" name="starring" id="starring">@isset ($movie){{ $movie->starring }}@else{{ old('starring') }}@endisset</textarea>
        @error('starring')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="director">Director: </label>
    <div class="col-md-8">
        <input type="text" class="form-control @error('director') is-invalid @enderror" name="director" id="director" value="@isset ($movie){{ $movie->director }}@else{{ old('director') }}@endisset">
        @error('director')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="censor_rating_id">Censor Rating: </label>
    <div class="col-md-8">
        <select class="custom-select @error('censor_rating_id') is-invalid @enderror" name="censor_rating_id" id="censor_rating_id">
            @isset($movie)
            @else
            <option value="">Choose Censor Rating</option>
            @endisset
            @foreach ($censorRatings as $censorRating)
            <option value="{{ $censorRating->id }}" @isset($movie) @if ($censorRating->id == $movie->censor_rating_id) selected @endif @endisset>{{ $censorRating->name }}</option>
            @endforeach
        </select>
        @error('censor_rating_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="genre_id">Genre: </label>
    <div class="col-md-8">
        <select class="custom-select @error('genre_id') is-invalid @enderror" name="genre_id" id="genre">
            @isset($movie)
            @else
            <option value="">Choose Genre</option>
            @endisset
            @foreach ($genres as $genre)
            <option value="{{ $genre->id }}" @isset($movie) @if ($genre->id == $movie->id) selected @endif @endisset>{{ $genre->name }}</option>
            @endforeach
        </select>
        @error('genre_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="synopsis">Synopsis: </label>
    <div class="col-md-8">
        <textarea class="form-control @error('synopsis') is-invalid @enderror" name="synopsis" id="synopsis">@isset ($movie){{ $movie->synopsis }}@else{{ old('synopsis') }}@endisset</textarea>
        @error('synopsis')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="language">Language: </label>
    <div class="col-md-8">
        <input type="text" class="form-control @error('language') is-invalid @enderror" name="language" id="language" value="@isset ($movie){{ $movie->language }}@else{{ old('language') }}@endisset">
        @error('language')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="duration">Duration(minutes): </label>
    <div class="col-md-8">
        <input type="number" class="form-control @error('duration') is-invalid @enderror" name="duration" id="duration" value="@isset ($movie){{ $movie->duration }}@else{{ old('duration') }}@endisset">
        @error('duration')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="since">Since: </label>
    <div class="col-md-8">
        <input type="date" class="form-control @error('since') is-invalid @enderror" name="since" id="since" value="@isset ($movie){{ $movie->since }}@else{{ old('since') }}@endisset">
        @error('since')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="trailer_link">Trailer Link: </label>
    <div class="col-md-8">
        <input type="text" class="form-control @error('trailer_link') is-invalid @enderror" name="trailer_link" id="trailer_link" value="@isset ($movie){{ $movie->trailer_link }}@else{{ old('trailer_link') }}@endisset">
        @error('trailer_link')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="banner">Banner: </label>
    <div class="col-md-8">
        <input type="file" class="custom-file @error('banner') is-invalid @enderror" name="banner" id="banner">
        @error('banner')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right">Status: </label>
    <div class="col-md-8">
        <div class="custom-control custom-radio">
            <input type="radio" id="comingSoon" name="status" class="custom-control-input" value="Coming Soon" @isset($movie) @if($movie->status == 'Coming Soon') checked @endif @endisset>
            <label class="custom-control-label" for="comingSoon">Coming Soon</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="nowPlaying" name="status" class="custom-control-input" value="Now Playing" @isset($movie) @if($movie->status == 'Now Playing') checked @endif @endisset>
            <label class="custom-control-label" for="nowPlaying">Now Playing</label>
        </div>
        @error('status')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
        <button type="submit" class="btn btn-primary text-uppercase">
            @isset($movie)
                Save
            @else
                Submit
            @endisset
        </button>
    </div>
</div>