@if(auth()->user()->isLibrarian())
    <div class="custom-checkbox custom-control">
        <input type="checkbox" class="custom-control-input sub-checkbox" id="checkbox-{{ $id }}" value="{{ $id }}">
        <label for="checkbox-{{ $id }}" class="custom-control-label">&nbsp;</label>
    </div>
@endif
