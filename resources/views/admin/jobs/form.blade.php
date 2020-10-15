


        <div class="card bd-0">
            <div class="card-header bg-success">
                Job Details
            </div>
            <div class="card-body bd bd-t-0">
        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-12 control-label">Title</label>
    <div class="col-md-12">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($job)->title) }}" minlength="1" maxlength="255" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>


        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-12 control-label">Description</label>
    <div class="col-md-12">
        <textarea class="form-control" name="description" cols="50" rows="10" id="description" minlength="1" maxlength="1000">{{ old('description', optional($job)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group {{ $errors->has('type_id') ? 'has-error' : '' }}">
                    <label for="type_id" class="col-md-12 control-label">Industrial Type</label>
                    <div class="col-md-12">
                        <select class="form-control" id="type_id" name="type_id">
                            <option value="" style="display: none;" {{ old('type_id', optional($job)->type_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select type</option>
                            @foreach ($types as $key => $type)
                                <option value="{{ $key }}" {{ old('type_id', optional($job)->type_id) == $key ? 'selected' : '' }}>
                                    {{ $type }}
                                </option>
                            @endforeach
                        </select>

                        {!! $errors->first('type_id', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group {{ $errors->has('type_id') ? 'has-error' : '' }}">
                    <label for="type_id" class="col-md-12 control-label">Functional Area</label>
                    <div class="col-md-12">
                        <select class="form-control" id="type_id" name="type_id">
                            <option value="" style="display: none;" {{ old('type_id', optional($job)->type_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select type</option>
                            @foreach ($types as $key => $type)
                                <option value="{{ $key }}" {{ old('type_id', optional($job)->type_id) == $key ? 'selected' : '' }}>
                                    {{ $type }}
                                </option>
                            @endforeach
                        </select>

                        {!! $errors->first('type_id', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group {{ $errors->has('is_active') ? 'has-error' : '' }}">
                    <label for="is_active" class="col-md-12 control-label">Is Active</label>
                    <div class="col-md-12">
                        <div class="checkbox">
                            <label for="is_active_1">
                                <input id="is_active_1" class="" name="is_active" type="checkbox" value="1" {{ old('is_active', optional($job)->is_active) == '1' ? 'checked' : '' }}>
                                Yes
                            </label>
                        </div>

                        {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
    <label for="category_id" class="col-md-12 control-label">Category</label>
    <div class="col-md-12">
        <select class="form-control" id="category_id" name="category_id">
            <option value="" style="display: none;" {{ old('category_id', optional($job)->category_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select category</option>
            @foreach ($categories as $key => $category)
                <option value="{{ $key }}" {{ old('category_id', optional($job)->category_id) == $key ? 'selected' : '' }}>
                    {{ $category }}
                </option>
            @endforeach
        </select>

        {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
            </div>
            <div class="col-md-6">
                <div class="form-group {{ $errors->has('location_id') ? 'has-error' : '' }}">
                    <label for="location_id" class="col-md-12 control-label">Location</label>
                    <div class="col-md-12">
                        <select class="form-control" id="location_id" name="location_id">
                            <option value="" style="display: none;" {{ old('location_id', optional($job)->location_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select location</option>
                            @foreach ($locations as $key => $location)
                                <option value="{{ $key }}" {{ old('location_id', optional($job)->location_id) == $key ? 'selected' : '' }}>
                                    {{ $location }}
                                </option>
                            @endforeach
                        </select>

                        {!! $errors->first('location_id', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
            </div>

        </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('min_salary') ? 'has-error' : '' }}">
                            <label for="min_salary" class="col-md-12 control-label">Min Salary</label>
                            <div class="col-md-12">
                                <input class="form-control" name="min_salary" type="text" id="min_salary" value="{{ old('min_salary', optional($job)->min_salary) }}" minlength="1" placeholder="Enter min salary here...">
                                {!! $errors->first('min_salary', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('max_salary') ? 'has-error' : '' }}">
                            <label for="max_salary" class="col-md-12 control-label">Max Salary</label>
                            <div class="col-md-12">
                                <input class="form-control" name="max_salary" type="text" id="max_salary" value="{{ old('max_salary', optional($job)->max_salary) }}" minlength="1" placeholder="Enter max salary here...">
                                {!! $errors->first('max_salary', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group {{ $errors->has('closing_date') ? 'has-error' : '' }}">
                            <label for="closing_date" class="col-md-12 control-label">Closing Date</label>
                            <div class="col-md-12">
                                <input class="form-control" name="closing_date" type="text" id="closing_date" value="{{ old('closing_date', optional($job)->closing_date) }}" placeholder="Enter closing date here...">
                                {!! $errors->first('closing_date', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <div class="card bd-0 mt-2">
                <div class="card-header bg-success">
                    Contact Details
                </div>
                <div class="card-body bd bd-t-0">


                    <div class="row">
                        <div class="col-md-12">

                                <div class="form-group">
                                    <label for="max_salary" class="col-md-12 control-label">Company Name</label>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" disabled value="{{ $job->company->name }}">

                                    </div>
                                </div>

                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email" class="col-md-12 control-label">email</label>
                                <div class="col-md-12">
                                    <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($job)->email) }}" minlength="1" placeholder="Enter email here...">
                                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="max_salary" class="col-md-12 control-label">Contact Name</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" disabled value="{{ $job->user->username }}">

                                </div>
                            </div>
                        </div>
                     <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone" class="col-md-12 control-label">Contact Phone</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" disabled value="{{ $job->user->phone }}">

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="company_id" class="col-md-12 control-label">Company Address</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" disabled value="{{ $job->company->address }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="company_id" class="col-md-12 control-label">Company Website</label>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" disabled value="{{ $job->company->website }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        <div class="card bd-0 mt-2">
            <div class="card-header bg-success">
                Candidate Profile
            </div>
            <div class="card-body bd bd-t-0 rounded-bottom">
                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                    <label for="description" class="col-md-12 control-label">Candidate Description</label>
                    <div class="col-md-12">
                        <textarea class="form-control" name="description" cols="50" rows="5" id="description" minlength="1" maxlength="1000">{{ old('description', optional($job)->description) }}</textarea>
                        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('experience_from') ? 'has-error' : '' }}">
                            <label for="experience_from" class="col-md-12 control-label">Experience From</label>
                            <div class="col-md-12">
                                <input class="form-control" name="experience_from" type="number" id="experience_from" value="{{ old('experience_from', optional($job)->experience_from) }}" placeholder="Enter Experience From here...">
                                {!! $errors->first('experience_from', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('experience_to') ? 'has-error' : '' }}">
                            <label for="experience_to" class="col-md-12 control-label">Experience To</label>
                            <div class="col-md-12">
                                <input class="form-control" name="experience_to" type="number" id="experience_to" value="{{ old('experience_to', optional($job)->experience_to) }}" placeholder="Enter Experience TO here...">
                                {!! $errors->first('experience_to', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

