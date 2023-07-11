<x-master-layout title="Forms">
      <!-- Page Title Section -->
      <section class="page__title">
        <h3>Forms</h3>
        <ul>
          <li><a href="#">360 Connect Solo / Settings</a></li>
          <li><a href="#">Forms</a></li>
        </ul>
      </section>
      <!-- Custmor Type -->
      <section class="service__wrapper content-starter">
        <div class="customer-block">
            <div class="cards-view">
              <div class="form__container">
                <form action="{{route('forms.index')}}" method="get">
                <div class="searchandbutton">
                  <div class="searchbox">
                    <input type="text" name="name" value="{{old('name',request()->name)}}" placeholder="Search ..."style="height: 45px;">
                    <i class="ri-search-2-line"></i>
                  </div>
                  <div class="form__group" style="min-width:360px;">
                    <div class="form__input_wrapper my-0">
                      <select name="type" id="" style="min-width:220px;" >
                        <option value="">Form for</option>
                        <option value="">All</option>
                        <option  @if (request()->type == 'Domestic Electrical') selected @endif value="Domestic Electrical">Domestic Electrical</option>
                        <option  @if (request()->type == 'Domestic Gas') selected @endif value="Domestic Gas">Domestic Gas</option>
                        <option  @if (request()->type == 'Commercial Gas') selected @endif value="Commercial Gas">Commercial Gas</option>
                        {{-- <option value="Oil">Oil</option> --}}
                      </select>
                    </div>
                    <div class="form__input_wrapper my-0">
                      <select name="status" id="" style="min-width:120px;">
                        <option value="">Status</option>
                        <option value="">All Status</option>
                        <option @if (request()->status == 'live') selected @endif value="live">Live</option>
                        <option  @if (request()->status == 'coming_soon') selected @endif value="coming_soon">Coming Soon</option>
                      </select>
                    </div>
                  </div>

                  <button class="btn-primarynew" style="min-width:50px;" type="submit"><i class="ri-restart-line"></i></button>
                </div>
            </form>
                <div class="table-responsive">
                  <table class="app-table" style="min-width: 900px;" id="formTable">
                    <thead>
                      <tr>
                        <th class="width10"><i class="ri-more-2-fill"></i></th>
                        <th>Form Name.</th>
                        <th>Form For</th>
                        <th>Cert Valid For?</th>
                        <th>Status</th>
                        <th class="width20">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse ($forms as $form)
                    <tr>
                    <td class="width10">
                        <div class="form-check">
                        <input type="checkbox" id="cc{{$form->id}}">
                        <label for="cc{{$form->id}}"></label>
                        </div>
                    </td>
                    <td>{{$form->name}}</td>
                    <td>{{$form->type}}</td>
                    <td>
                        <input type="hidden" id="form_id_{{$form->id}}" name="form_id" value="{{$form->id}}">
                        <input type="text" id="cert_days_{{$form->id}}" name="cert_days" disabled style="max-width:100px;" value="{{isset($cert_valid_days[$form->id]) ? $cert_valid_days[$form->id] : '' }}" placeholder="Enter days">

                    </td>


                    <td><span class="status @if($form->status == 'coming_soon') waitng @elseif($form->status == 'live')  won  @endif"></span>{{ucwords(str_replace('_',' ',$form->status))}}</td>

                    <td class="actions" style="display:none" id="check_{{ $form->id }}">
                        <span class="mr-2 action-icon okay save_cert_days"
                            data-val="{{ $form->id }}" data-url="{{route('forms.cert.valid')}}"><i
                                class="ri-check-double-line"></i></span>
                        <span class="action-icon delete"><i class="ri-close-line"></i></span>
                    </td>
                    <td class="width20" id="edit_{{ $form->id }}">
                        <span data-val="{{ $form->id }}"
                            class="action-icon edit-icon"><i
                                class="ri-edit-line"></i></span>
                        <a href="{{route('forms.show',$form->id)}}" class="action-icon ml-2 okay"><i class="ri-eye-line"></i></a>
                    </td>
                    </tr>
                    @empty
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> <h5 class="text-muted">No forms</h5>  </td>
                    </tr>
                    @endforelse
                    </tbody>
                  </table>
                </div>
                {{$forms->links()}}
              </div>
            </div>
          </div>
      </section>
      <!-- Modal goes hers -->
      <div class="modal fade" id="takeTimeOff" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content modal__content">
            <div class="modal__title">
              <h2>Take Time Off</h2>
              <span type="button" data-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
              </span>
            </div>
            <div class="modal__body mt-3">
              <div class="form__container">
                <div class="form__group">
                  <div class="form__input_wrapper w-100">
                    <label>Time Off date</label>
                    <input type="date" placeholder="Enter Time Off date">
                  </div>
                  <div class="form__input_wrapper w-100">
                    <label>From (time)</label>
                    <select>
                      <option value="#">Enter Customer Email</option>
                    </select>
                  </div>
                  <div class="form__input_wrapper w-100">
                    <label>To (time)</label>
                    <select>
                      <option value="#">Enter Customer Email</option>
                    </select>
                  </div>
                  <div class="form__input_wrapper w-100">
                    <label>To date</label>
                    <input type="date" placeholder="Enter Customer Email">
                  </div>
                  <div class="form__input_wrapper w-100 mt-4 text-right">
                    <button class="submitbtn">Accept</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
</x-master-layout>
