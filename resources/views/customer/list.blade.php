<div class="row grid-margin">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">
                    جدول مشتربان
                    <button data-toggle="modal" data-target="#exampleModal"
                            class="btn btn-sm btn-secondary btn-rounded border float-left">اضافی کردن
                    </button>
                </h4>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>ادی</td>
                        <td>نام</td>
                        <td>ایمیل</td>
                        <td>حساب</td>
                        <td>عملیات</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->wallet }}</td>

                            <td>
                                <a href="javascript:if(confirm('Do you want delete this record?'))ajaxDelete('{{route('customer.delete',$customer->id)}}','{{csrf_token()}}')">
                                    <i class="icon icon-trash"></i></a>
                                <button
                                        class="btn edit-btn btn-link"><i class="icon icon-settings"></i></button>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>


                </table>

            </div>
            {{ $customers->links() }}
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافی کردن مشتری</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{--isset($customer) ?url('customer/update/'.$customer->card_id):--}}
            <form id="frm" method="post" action="{{route('customer.create')}}">

                {{--{{isset($customer) ?method_field('put') :''}}--}}
                {{csrf_field()}}

                <div class="modal-body ">
                    <div class="form-group">
                        <label for="inputAddress">نام</label>
                        <input type="text" name="name" class="form-control" id="inputAddress">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">ایمبل</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">رمز ورود</label>
                            <input type="password" name="password" class="form-control" id="inputPassword4"
                                   placeholder="Password">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بسته</button>
                    <button type="submit" id="btn_save" name="submit" class="btn btn-primary">ذخیره</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabeledit"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabeledit">ویرایش کردن مشتری</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{--isset($customer) ?url('customer/update/'.$customer->card_id):--}}
            <form id="frm" method="post" action="{{route('customer.update')}}">

                {{csrf_field()}}

                <div class="modal-body ">
                    <input type="hidden" name="id" id="id-edit">
                    <div class="form-group">
                        <label for="inputAddress">نام</label>
                        <input type="text" name="name" class="form-control" id="name-edit">
                    </div>

                    <div class="form-group">
                        <label for="inputEmail4">ایمبل</label>
                        <input type="email" name="email" class="form-control" id="email-edit" placeholder="Email">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بسته</button>
                    <button type="submit" id="btn_save" name="submit" class="btn btn-primary">ذخیره</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function () {
        $(document).on('click', '.pagination a', function (event) {
            event.preventDefault();

            $('li').removeClass('active');
            $(this).parent('li').addClass('active');

            var myurl = $(this).attr('href');

            ajaxLoad(myurl);
        });

        $(".edit-btn").click(function () {


            var email = $(this).parent().prev().prev();
            $("#email-edit").val(email.text());
            var name = email.prev();

            $("#name-edit").val(name.text());
            $("#id-edit").val(name.prev().text());

            $("#exampleModaledit").modal('show')
        })

    });

    // function getData(page){
    //     $.ajax(
    //         {
    //             url: '?page=' + page,
    //             type: "get",
    //             datatype: "html"
    //         }).done(function(data){
    //         $("#tag_container").empty().html(data);
    //         location.hash = page;
    //     }).fail(function(jqXHR, ajaxOptions, thrownError){
    //         alert('No response from server');
    //     });
    // }
</script>