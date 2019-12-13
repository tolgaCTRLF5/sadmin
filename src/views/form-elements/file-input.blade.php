<input
        id="{{ $row->id ? $row->id : uniqid() }}"
        name="{{ $row->name }}"
        type="file"
        {{ $row->multiple ? ' multiple' : '' }}
        class="form-control @if(is_array($row->class)){{ implode(' ',$row->class) }} @elseif(is_string($row->class)) {{ $row->class }} @endif {{ $errors->get($row->name) ? 'is-invalid' : '' }}"
        placeholder="{{ $row->placeholder }}"
        value="{{ $row->value ? $row->value : (old($row->name) ? old($row->name) : '') }}"
        @if($row->required)required @endif>

@if(isset($errors) && $errors->get($row->name))

    <small class="form-text text-danger">

        @foreach($errors->get($row->name) as $message)
            {{ $message }}
        @endforeach

    </small>

@elseif($row->description)

    <small class="form-text text-info">
        {{  $row->description }}
    </small>

@endif
