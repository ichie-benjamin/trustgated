<div class=" m10 li-he">
    <div class="media jobmbg">
        <div class="media-body">
            <div class="col-md-10">
                <h4 class="media-heading"><a href="{{ route('jobs.job.view',$job->slug) }}">{{ $job->title }}</a></h4>
                <small><em>{{ $job->company->name }}</em></small>
            </div>
            <div class="col-md-2">
                <!-- <div class="save-job">
                                                                <a href="javascript:;" onclick="alert('Please Login to Save')"><i class="fa fa-floppy-o"></i> Save Job</a>
                                                            </div> -->
                <!--<div class="save-job"><a href="#"><i class="fa fa-floppy-o"></i> Save Job</a></div>-->
            </div>
            <div class="entry-meta mtop40">
                <div class="col-md-10"> <span class="posted-on"><i class="fa fa-map-marker"></i>
                       <span class="entry-date">
                       {{ $job->city }}												 </span></span>
                    <span class="byline"> <i class="fa fa-suitcase"></i> <span class="author vcard">{{ "$job->experience_from - $job->experience_to" }} YRS </span></span>

                    <span class="comments-link">{{ $job->salary }} </span></div>
                <div class="col-md-2 text-right">
                    <a class="btn-blue btn" style="color:#FFFFFF" href="{{ route('jobs.job.view',$job->slug) }}">Details</a>
                </div>
            </div>
            <div class="bs-example " data-example-id="horizontal-dl">
                <dl class="dl-horizontal">

                    <dt>Industry:</dt>
                    <dd> {{ optional($job->industry)->category }}</dd>
                    <dt>Key Skills: </dt>
                    <dd>sales management, marketing, marketing executive, sales manager, sales executive, sales officer, marketing manager, business development manager</dd>
                    <dt>Job Description:  </dt>
                    <dd>{{ $job->short_description }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div><!--job-list-bg-->
