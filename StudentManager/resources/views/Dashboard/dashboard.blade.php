@extends('Layout.master')
@section('title', 'Dashboard')
@section('main')
<div class="dashboard-container">
    <div class="card total1">
    <div class="info">
      <div class="info-detail">
      <h5>4</h5>
      <p>Total students</p>
      </div>
     <div class="info-image">
      <i class="fas fa-user-graduate"></i>
       </div> 
       </div>
    </div>
    <div class="card total2">
    <div class="info">
      <div class="info-detail">
      <h5>6</h5>
      <p>Total teachers</p>
      </div>
     <div class="info-image">
     <i class="fas fa-user-tie"></i>
       </div> 
       </div>
    </div>
   <div class="card total3">
   <div class="info">
      <div class="info-detail">
      <h5>9</h5>
      <p>Total courses</p>
      </div>
     <div class="info-image">
     <i class="fas fa-bookmark"></i>
       </div> 
       </div>
   </div>
   <div class="card total4">
   <div class="info">
      <div class="info-detail">
      <h5>6</h5>
      <p>Total grades</p>
      </div>
     <div class="info-image">
     <i class="fab fa-intercom"></i>
       </div> 
       </div>
   </div>
   <div class="card detail">
    <div class="title">
      <h3>List success student</h3>
    </div>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student code</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Gch1010</td>
      <td>Cuong</td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Gch2742</td>
      <td>Bui Hoang</td>
      <td>9,5</td>
    </tr>
  </tbody>
</table>
   </div>
   </div>
   @stop