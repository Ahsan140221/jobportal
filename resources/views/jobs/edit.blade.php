@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
                @endif
                <div class="card-header">Edit Job</div>
                <div class="card-body">
                    <form action="{{route('jobs.update',[$job->id, $job->slug])}}" method="POST">@csrf
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                value="{{ $job->title }}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description"
                                class="form-control @error('description') is-invalid @enderror">{{ $job->description }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="roles">Roles:</label>
                            <input type="text" name="roles" class="form-control @error('roles') is-invalid @enderror"
                                value="{{ $job->roles }}">
                            @error('roles')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category:</label>
                            <select name="category_id" class="form-control">
                                @foreach(App\Category::all() as $cat)
                                <option value="{{$cat->id}}" {{$cat->id==$job->category_id?'selected':''}}>
                                    {{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="position">Position:</label>
                            <input type="text" name="position"
                                class="form-control @error('position') is-invalid @enderror"
                                value="{{ $job->position }}">
                            @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address"
                                class="form-control @error('address') is-invalid @enderror" value="{{ $job->address}}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="number_of_vacancy">No. of vacancies:</label>
                            <input type="text" name="number_of_vacancy"
                                class="form-control @error('number_of_vacancy') is-invalid @enderror"
                                value="{{$job->number_of_vacancy}}">
                            @error('number_of_vacancy')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="experience">Experience:</label>
                            <input type="text" name="experience"
                                class="form-control @error('experience') is-invalid @enderror"
                                value="{{$job->experience}}">
                            @error('experience')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select name="gender" class="form-control">
                                <option value="any" {{$job->gender=='any'?'selected':''}}>Any</option>
                                <option value="male" {{$job->gender=='male'?'selected':''}}>Male</option>
                                <option value="female" {{$job->gender=='female'?'selected':''}}>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary/month:</label>
                            <select name="salary" class="form-control">
                                <option value="negotiable" {{$job->salary=='negotiable'?'selected':''}}>Negotiable
                                </option>
                                <option value="10000-30000" {{$job->salary=='10000-30000'?'selected':''}}>10000-30000
                                </option>
                                <option value="31000-40000" {{$job->salary=='31000-40000'?'selected':''}}>31000-40000
                                </option>
                                <option value="41000-50000" {{$job->salary=='41000-50000'?'selected':''}}>41000-50000
                                </option>
                                <option value="51000-70000" {{$job->salary=='51000-70000'?'selected':''}}>51000-70000
                                </option>
                                <option value="71000-100000" {{$job->salary=='71000-100000'?'selected':''}}>71000-100000
                                </option>
                                <option value="100000+" {{$job->salary=='100000+'?'selected':''}}>100000+</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="type">Employment Type:</label>
                            <select name="type" class="form-control">
                                <option value="fulltime" {{$job->type=='fulltime'?'selected':''}}>Full Time</option>
                                <option value="parttime" {{$job->type=='parttime'?'selected':''}}>Part Time</option>
                                <option value="casual" {{$job->type=='casual'?'selected':''}}>Casual</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status:</label>
                            <select name="status" class="form-control">
                                <option value="1" {{$job->status=='1'?'selected':''}}>Live</option>
                                <option value="0" {{$job->status=='0'?'selected':''}}>Draft</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="last_date">Last Date:</label>
                            <input type="text" id="datepicker" name="last_date"
                                class="form-control @error('last_date') is-invalid @enderror"
                                value="{{ $job->last_date }}">
                            @error('last_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
