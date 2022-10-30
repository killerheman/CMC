<aside class="page-sidebar col-md-2 col-sm-4 affix-top">
    <section class="widget">
        <ul class="nav">
            <li class="{{ $active == 1 ? 'active' : '' }}"><a href="{{ route('underGraduateCourses') }}">Under-Graduate Courses</a>
            </li>
            <li class="{{ $active == 2 ? 'active' : '' }}"><a href="{{ route('postGraduateCourses') }}">Post-Graduate Courses</a></li>
            <li class="{{ $active == 3 ? 'active' : '' }}"><a href="{{ route('diplomaCourses') }}">Diploma Courses</a></li>
            <li class="{{ $active == 4 ? 'active' : '' }}"><a href="{{ route('certificateCourses') }}">Certification Courses</a></li>
            <li></li>
        </ul>
    </section>
    <!--//widget-->
</aside>
