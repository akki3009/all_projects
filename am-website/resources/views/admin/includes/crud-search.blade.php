<?php
$searcheElements = isset($searches) ? $searches : [];
if($searcheElements){ ?>
  <div class="col-lg-12 col-12">
    <div class="{{ cardClasses() }} collapsed-card">
      <div class="card-header">
      	<h3 class="card-title">Filter</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
        </div>
      </div>
      <div class="card-body">
        <form id="frm-search-crud" action="" >
          <div class="row">
            <?php 
						foreach($searcheElements as $searcheElement){ 
							if(in_array($searcheElement['name'], ['srch_status', 'srch_country', 'srch_parent_category', 'srch_product_attr_type'])){
								if($searcheElement['name'] == 'srch_status'){
									$selectLabel = 'Status'; $selectOptions = siteConfig('ti_status');
								}
								else if($searcheElement['name'] == 'srch_parent_category'){
									$selectLabel = 'Parent Category'; $selectOptions = \Category::dropdown();
								}
								else if($searcheElement['name'] == 'srch_product_attr_type'){
									$selectLabel = 'Product Attribute Type'; $selectOptions = (new \ProductAttribute)->getTypes();
								}
								
								?>
              	<div class="col-md-2 col-lg-2">
                  <div class="form-group">
                    <div class="row">
                      <label class="control-label col-sm-12" >{!! $selectLabel !!}</label>
                      <div class="col-sm-12">
                        <select class="form-control select2" id="{{$searcheElement['name']}}" name="{{$searcheElement['name']}}" >
                          <option value="" ></option>
                          {!! makeDropdown($selectOptions, '') !!}
                        </select>
                      </div>
                    </div>
                  </div>
                </div><?php 
							}
							else if($searcheElement['name'] == 'srch_general'){ ?>
                <div class="col-md-2 col-lg-2">
                  <div class="form-group">
                    <div class="row">
                      <label class="control-label col-sm-12" >Search</label>
                      <div class="col-sm-12"><input type="text" class="form-control" id="{{$searcheElement['name']}}" name="{{$searcheElement['name']}}" value="" /></div>
                    </div>
                  </div>
                </div><?php 
							}
						} ?>
            <div class="col-md-2 col-lg-2">
              <div class="form-group">
                <div class="row">
                  <label class="control-label col-sm-12" >Actions</label>
                  <div class="col-sm-12">
                    <button type="button" class="btn btn-info" onclick="fireCrudSearch()" >Search</button>
                    <button type="button" class="btn btn-default ml-2" onclick="clearCrudSearch()" >Clear</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
	<?php 
} ?>