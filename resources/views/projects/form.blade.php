<div class="row">
    <div class="col-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>

<form method="POST" action="{{url($action)}}" class="row">
    @if(isset($isUpdate) && $isUpdate)
        @method('PUT')
    @endif
    @csrf
    <div class="col-md-12">
        <label for="description" class="form-label">Description</label>
        <input type="text" value="{{ old('description', $project->description ?? '') }}" id="description" class="form-control @error('description') is-invalid @enderror" name="description"  />
        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="code" class="form-label">Code</label>
        <input type="text" value="{{ old('code', $project->code ?? '') }}" id="code" class="form-control @error('code') is-invalid @enderror" name="code" />
        @error('code')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="code" class="form-label">Hold id</label>
        <input type="text" value="{{ old('hold_id', $project->hold_id ?? '') }}" id="holdId" class="form-control @error('hold_id') is-invalid @enderror" name="hold_id" />
        @error('hold_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="code" class="form-label">Planned start</label>
        <input type="text" value="{{ old('planned_start', $project->planned_start ?? '') }}" readonly id="plannedStart" class="form-control @error('planned_start') is-invalid @enderror" name="planned_start" />
        @error('planned_start')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="code" class="form-label">Planned end</label>
        <input type="text" value="{{ old('planned_end', $project->planned_end ?? '') }}" readonly id="plannedEnd" class="form-control @error('planned_end') is-invalid @enderror" name="planned_end" />
        @error('planned_end')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="col-12 my-1">
        <div class="float-end">
            <button type="submit" class="btn btn-outline-primary"><span class="fas fa-floppy-disk"></span> Save</button>
        </div>
    </div>
</form>
