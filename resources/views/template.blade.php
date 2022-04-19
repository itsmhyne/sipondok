<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.head');
    <title>Dashboard &mdash; Sipondok</title>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                @include('template.nav');
            </nav>
            <div class="main-sidebar">
                @include('template.sidebar');
            </div>

            <!-- Main Content -->
            <div class="main-content" id="app">
                <!-- content -->
                <example-component></example-component>
            </div>
            <footer class="main-footer">
                @include('template.footer');
            </footer>
        </div>
    </div>

    @include('template.scripts');
</body>

</html>
