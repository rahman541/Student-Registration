<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::route('students.index') }}">Students</a>
    </div>
    <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="{{ URL::route('students.index') }}">View All Student</a></li> -->
        {{ HTML::clever_link('students.index', 'Home') }}
        {{ HTML::clever_link('students.create', 'Create a Student') }}
        <!-- <li><a href="{{ URL::route('students.create') }}">Create a Nerd</a> -->
    </ul>
</nav>