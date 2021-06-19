<div class="form-group row">
    <label class="col-md-4 text-right" for="date">Date: </label>
    <div class="col-md-8">
        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date" value="@isset ($schedule){{ $schedule->date }}@else{{ old('date') }}@endisset">
        @error('date')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="time">Time: </label>
    <div class="col-md-8">
        <input type="time" class="form-control @error('time') is-invalid @enderror" name="time" id="time" value="@isset ($schedule){{ $schedule->time }}@else{{ old('time') }}@endisset">
        @error('time')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="theater_id">Theater: </label>
    <div class="col-md-8">
        <select class="custom-select @error('theater_id') is-invalid @enderror" name="theater_id" id="theater_id">
            @isset($schedule)
            @else
            <option value="">Choose Theater</option>
            @endisset
            @foreach ($theaters as $theater)
            <option value="{{ $theater->id }}" @isset($schedule) @if ($theater->id == $schedule->theater_id) selected @endif @endisset>{{ $theater->name }}</option>
            @endforeach
        </select>
        @error('theater_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-md-4 text-right" for="movie_id">Movie: </label>
    <div class="col-md-8">
        <select class="custom-select @error('movie_id') is-invalid @enderror" name="movie_id" id="movie">
            @isset($schedule)
            @else
            <option value="">Choose Movie</option>
            @endisset
            @foreach ($movies as $movie)
            <option value="{{ $movie->id }}" @isset($schedule) @if ($movie->id == $schedule->movie_id) selected @endif @endisset>{{ $movie->title }}</option>
            @endforeach
        </select>
        @error('movie_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-group row">
    <div class="col-md-4">
    </div>
    <div class="col-md-8">
        <button type="submit" class="btn btn-primary text-uppercase">
            @isset($schedule)
                Save
            @else
                Submit
            @endisset
        </button>
    </div>
</div>