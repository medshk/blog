@extends('layouts.recruteur_layout')

@section('content')
<div class="manage-jobs-sec">
    <h3>Transactions</h3>
    <table>
        <thead>
            <tr>
                <td>Package ID</td>
                <td>Title</td>
                <td>Payment Date</td>
                <td>Payment Type</td>
                <td>Amount</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <span>221319456</span>
                </td>
                <td>
                    <div class="table-list-title">
                        <h3><a href="#" title="">Advertise job - Supper Jobs</a></h3>
                    </div>
                </td>
                <td>
                    <span>April 04, 2017</span>
                </td>
                <td>
                    <span>Pre Bank Transfer</span>
                </td>
                <td>
                    <span class="status active">$99</span>
                </td>
                <td>
                    <span>Pending</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>221319456</span>
                </td>
                <td>
                    <div class="table-list-title">
                        <h3><a href="#" title="">CV Search - Unlimited CV Pack</a></h3>
                    </div>
                </td>
                <td>
                    <span>April 04, 2017</span>
                </td>
                <td>
                    <span>Skrill</span>
                </td>
                <td>
                    <span class="status active">$150</span>
                </td>
                <td>
                    <span>Approved</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>221319456</span>
                </td>
                <td>
                    <div class="table-list-title">
                        <h3><a href="#" title=""> Advertise job - Golden Package</a></h3>
                    </div>
                </td>
                <td>
                    <span>April 04, 2017</span>
                </td>
                <td>
                    <span>Paypal</span>
                </td>
                <td>
                    <span class="status active">$124</span>
                </td>
                <td>
                    <span>Pending</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span>221319456</span>
                </td>
                <td>
                    <div class="table-list-title">
                        <h3><a href="#" title="">Advertise job - Supper Jobs</a></h3>
                    </div>
                </td>
                <td>
                    <span>April 04, 2017</span>
                </td>
                <td>
                    <span>Payoneer</span>
                </td>
                <td>
                    <span class="status active">$117</span>
                </td>
                <td>
                    <span>Pending</span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

