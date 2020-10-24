<div class="col-md-3">
    <div class="create-job">
        <div class="create-job-head">
            <h3> Create Your Job Alert</h3>
        </div>
        <div class="create-job-content">
            <p>
                Specify your criteria and Regularly receive jobs of your choice
                Be the first to apply for these jobs Stay updated about the job market.</p>
            <div class="ali-right"><input class="btn-blue btn" data-toggle="modal" data-target="#createjob" value="Create Now" type="button"></div>
        </div>
    </div><!--create-job-->

    <div class="create-job">
        <div class="create-job-head">
            <h3> Recruiters </h3>
        </div>
        <div class="create-job-content">
            <p> Connect to recruiters directly. More than 50,000 Recruiter across Industries.</p>
            <div class="ali-right">  <a href="{{ route('recruiters') }}" class="btn-blue btn" >View All</a></div>
        </div>
    </div><!--create-job-->


    <div class="create-job">
        <div class="create-job-head">
            <h3> Featured Companies </h3>
        </div>
        <div class="create-job-content">
            @foreach($f_companies as $item)
            <div class="fea-compa"><a href="{{ route('company.jobs',$item->slug) }}"> <img class="img-thumbnail" src="{{ asset($item->logo) }}" alt="{{ $item->name }}"></a></div>
            @endforeach
        </div>
    </div><!--create-job-->

    <div class="openings">

        @foreach($ad_job_right as $item)
        <a href="#"><img src="{{ asset($item->image) }}" alt="{{ $item->company_name }}"></a>
        @endforeach
    </div><!--openings-->

</div><!--col-md-3-->
