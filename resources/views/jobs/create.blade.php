<x-header />


<h1>Create A job</h1>
<form action="" method="POST">
    {{-- @csrf --}}
    <input type="text" name="title" placeholder="Job Title">
    <input type="text" name="description" placeholder="Job Description">
    <button type="submit">Create Job</button>
</form>
