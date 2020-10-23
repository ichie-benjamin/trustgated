<div class="col-md-2  padno">
    <div class="refine">
        <div class="refine-head">
            <h2>Refine Results</h2>
        </div>

        <div class="refine-content">
            <form action="" method="GET" name="refine1" class="jobsr" onSubmit="">
                <input type="text" name="refkeyword" id="refkeyword" class="form-control "  placeholder="Keywords" value="">
                <input type="text" name="reflocation" id="reflocation" class="form-control m10"  placeholder="Location" value="">
                <div class="text-center"> <input class="btn-blue btn m10" value="Refine " type="submit" name="refinesrch1"></div>
            </form>

        </div>
    </div>

    @foreach($ad_job_left as $item)
    <div class="openings">
        <a href="#"><img src="{{ asset($item->image) }}" alt="{{ $item->company_name }}"></a>
    </div>
    @endforeach
</div>
