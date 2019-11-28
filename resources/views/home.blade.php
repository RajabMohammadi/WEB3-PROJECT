@extends("partion.main")
@section("content")


    <div class="loader content-wrapper content-loader">
        <div class="square-box-loader">

                <div class="square-box-loader-container">
                    <div class="square-box-loader-corner-top"></div>
                    <div class="square-box-loader-corner-bottom"></div>

                </div>
                <div class="square-box-loader-square">

                </div>


        </div>
        <p class="text-loading">صبر کنید...</p>
    </div>

    <div class="content-wrapper" id="content">


        <div class="page-header">
            <h3 class="page-title">
                Dashboard
            </h3>
        </div>
        <div class="row grid-margin">
            <div class="col-12">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fa fa-user mr-2"></i>
                                    New users
                                </p>
                                <h2>54000</h2>
                                <label class="badge badge-outline-success badge-pill">2.7% increase</label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                    Avg Time
                                </p>
                                <h2>123.50</h2>
                                <label class="badge badge-outline-danger badge-pill">30% decrease</label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-cloud-download-alt mr-2"></i>
                                    Downloads
                                </p>
                                <h2>3500</h2>
                                <label class="badge badge-outline-success badge-pill">12% increase</label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-check-circle mr-2"></i>
                                    Update
                                </p>
                                <h2>7500</h2>
                                <label class="badge badge-outline-success badge-pill">57% increase</label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-chart-line mr-2"></i>
                                    Sales
                                </p>
                                <h2>9000</h2>
                                <label class="badge badge-outline-success badge-pill">10% increase</label>
                            </div>
                            <div class="statistics-item">
                                <p>
                                    <i class="icon-sm fas fa-circle-notch mr-2"></i>
                                    Pending
                                </p>
                                <h2>7500</h2>
                                <label class="badge badge-outline-danger badge-pill">16% decrease</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-gift"></i>
                            Orders
                        </h4>
                        <canvas id="orders-chart"></canvas>
                        <div id="orders-chart-legend" class="orders-chart-legend"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="fas fa-chart-line"></i>
                            Sales
                        </h4>
                        <h2 class="mb-5">56000 <span class="text-muted h4 font-weight-normal">Sales</span></h2>
                        <canvas id="sales-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection

