<div class="col-md-3">
    <div class="create-job">
        <div class="create-job-head">
            <h3> Profile Status </h3> <span class="badge markq"
                                            title="See how your profile on {{ env('APP_NAME') }} has performed over the last 30 days.">?</span>
        </div>

        <div class="create-job-content">
            <div class="progress">

                <div class="progress-bar progress-bar-success" role="progressbar"
                     aria-valuenow="{{ $user->profileStatus() }}" aria-valuemin="0" aria-valuemax="100"
                     style="width:{{ $user->profileStatus() }}%">
                    {{ $user->profileStatus() }}%complete
                </div>


            </div>
            <div class="add indx"><span class="bocol">Pending : </span> @foreach (auth()->user()->profilePending() as $item)
                {{ $item }}
            @endforeach
            </div>

        </div>

    </div><!--create-job-->

    <div class="create-job">
        <div class="create-job-head">
            <h3>Profile Performance</h3> <span class="badge markq" title="Profile performance">?</span>
        </div>
        <div class="create-job-content">
            <div class="pt10">
                <ul class="pp">
                    <li class="bdrLN"><a class="curDef">{{ auth()->user()->resumeView() }}</a>
                        <div>Views</div>
                    </li>
{{--                    <li class="w88"><a class="curDef">0</a>--}}
{{--                        <div>Downloads</div>--}}
{{--                    </li>--}}
                    <li class="bdrRN"><a class="curDef">{{ auth()->user()->resumeDownload() }}</a>
                        <div>Downloads</div>
                    </li>
                </ul>
                <div class="widPad">
                    <div class="f11 txtrt">By recruiters in last 30 days</div>
                </div>
                <!-- <div class="pt5">
                   <span class="pbott"><a target="_blank" href="#"> Get professional help to increase CV views</a> </span>
                 </div>-->
            </div>
        </div>

    </div><!--create-job-->


    <div class="create-job">
        <div class="create-job-head">
            <h3>Application Summary</h3>
        </div>
        <div class="create-job-content">

            <div class="add mbt">
                You have applied for <span class="pbott"><a href="{{ route('application_history') }}"><b>{{ auth()->user()->allApplied() }} Jobs</b></a> </span>
                in last 30 days<br>
{{--                Daily Limit of Application: 50--}}
{{--                Monthly Limit of Application: 150--}}
            </div>

        </div>
    </div><!--create-job-->

    <div class="create-job">
        <div class="create-job-head">
            <h3>My Job Alert </h3>
        </div>
        <div class="create-job-content">


            <div class="text-right m10">
                <input class="btn-blue btn bc" data-toggle="modal" data-target="#createjob"
                       value="Create Another Job Alert " type="button">
            </div>
        </div><!--create-job-content-->
    </div><!--create-job-->

</div>
