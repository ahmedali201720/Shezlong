<div class="container">
    <div class="row flex-row-reverse mx-auto">
        <div class="input-group col-lg-3 col-md-6 d-none d-lg-flex d-md-flex">
           <div class="input-group-prepend">
              <span class="input-group-text"><i class="fa fa-filter"></i></span>
           </div>
           <select class="custom-select sort-select" onchange="handleSort()">
               <option value="" disabled selected>{{__('select')}}</option>
               <option value="lth">{{__('fees_LH')}}</option>
               <option value="htl">{{__('fees_HL')}}</option>
               <option value="rate">{{__('top_rated')}}</option>
           </select>
        </div>
        <div class="input-group col-lg-3 col-md-6 d-none d-lg-flex d-md-flex">
           <select class="custom-select filter-select" onchange="handleFilter()">
              <option value="" disabled selected>{{__('select')}}</option>
              <option value="all">{{__('all_spec')}}</option>
              <option value="Child disorders">{{__('child_disorder')}}</option>
              <option value="Adolescence disorders">{{__('adolescence')}}</option>
              <option value="Depression">{{__('depression')}}</option>
              <option value="Anxiety disorders and obsession">{{__('anxiety')}}</option>
              <option value="Marriage and relationships">{{__('marriage')}}</option>
              <option value="Psychotic disorders">{{__('psychotic')}}</option>
              <option value="Addiction">{{__('addiction')}}</option>
              <option value="Sexual disorders">{{__('sexual')}}</option>
              <option value="Old age disorders">{{__('old_age')}}</option>
           </select>
        </div>
        <div class="input-group col-lg-3 col-md-6 d-none d-lg-flex d-md-flex">
           <div class="input-group-prepend">
           <span class="input-group-text" onclick="handleSearch()"><i class="fa fa-search"></i></span>
           </div>
           <input type="text" class="search-form form-control" placeholder={{__('therapist_name')}} aria-label="Username" aria-describedby="basic-addon1">
        </div>
    </div>
</div>