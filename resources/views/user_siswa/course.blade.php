@extends('layouts.master')
@section('title', 'My Course')

@section('content')
<section class=".">
            <div class="container mt-5">
                <div class="text-center mb-4">
                    <h2>My Course</h2>
                </div>
                <div class="card p-3">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <button class="btn btn-primary btn-block">ALL</button>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="col-md-3">
                            <select class="form-control">
                                <option>Sort By Course Name</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="detail-course.html">
                                <div class="course-card">
                                    <div class="course-image">
                                        <img src="image/pattern-course.png" alt="">
                                    </div>
                                    <h5>Manajemen Sosial Kelas X IPS</h5>
                                    <div class="progress course-progress">
                                        <div class="progress-bar" role="progressbar" style="width: 14%;">14% complete
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="detail-course.html">
                                <div class="course-card">
                                    <div class="course-image">
                                        <img src="image/pattern-course.png" alt="">
                                    </div>
                                    <h5>Manajemen Sosial Kelas X IPS</h5>
                                    <div class="progress course-progress">
                                        <div class="progress-bar" role="progressbar" style="width: 14%;">14% complete
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="detail-course.html">
                                <div class="course-card">
                                    <div class="course-image">
                                        <img src="image/pattern-course.png" alt="">
                                    </div>
                                    <h5>Manajemen Sosial Kelas X IPS</h5>
                                    <div class="progress course-progress">
                                        <div class="progress-bar" role="progressbar" style="width: 14%;">14% complete
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="detail-course.html">
                                <div class="course-card">
                                    <div class="course-image">
                                        <img src="image/pattern-course.png" alt="">
                                    </div>
                                    <h5>Manajemen Sosial Kelas X IPS</h5>
                                    <div class="progress course-progress">
                                        <div class="progress-bar" role="progressbar" style="width: 14%;">14% complete
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="detail-course.html">
                                <div class="course-card">
                                    <div class="course-image">
                                        <img src="image/pattern-course.png" alt="">
                                    </div>
                                    <h5>Manajemen Sosial Kelas X IPS</h5>
                                    <div class="progress course-progress">
                                        <div class="progress-bar" role="progressbar" style="width: 14%;">14% complete
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection