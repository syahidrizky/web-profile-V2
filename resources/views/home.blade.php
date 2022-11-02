<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('konten')
 
      <div id="content-img">
        <div class="content1">
          <img src="assets/img/profile.png">
          <h2 class="content-header">Syahid D. Ningrat</h2>
          <p class="content-text">
            <b>IT Project Manager</b>
          </p>
        </div>
      </div>
      <!-- Short Description -->
      <section class="section section-small">
        <h2 class="section-header">About</h2>
        <p>I am an IT project manager with holistic knowledge of software development and design. I am also experienced in coordinating with stakeholders.</p>
      </section>
      <hr>
      <!-- Skill Table -->
      <section class="section">
        <h2 class="section-header">Skill</h2>
          <div class="responsive-table">
            <table>
              <tr class="tr-header">
                <th>&nbsp;</th>
                <th>Percent</th>
              </tr>
              <tr>
                <td class="text-left">Project Management</td>
                <td>80%</td>
              </tr>
              <tr>
                <td class="text-left">Software Development</td>
                <td>80%</td>
              </tr>
              <tr>
                <td class="text-left">Budgeting and Cost Analysis</td>
                <td>90%</td>
              </tr>
              <tr>
                <td class="text-left">Enterprise Resource Planning</td>
                <td>85%</td>
              </tr>
            </table>
          </div>
      </section>
      <hr>
      <!-- Education List -->
      <section class="section section-small">
        <h2 class="section-header">Education</h2>
        <h5>HGFZ Graduate Center</h5>
        <p>Masters in Project Management | Jan 2013 - Dec 2014</p>
        <h5>Cliffmoor college</h5>
        <p>BA Product Design | Dec 2008 - Dec 2012</p>
      </section>

@endsection