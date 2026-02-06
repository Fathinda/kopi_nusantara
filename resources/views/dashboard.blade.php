<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('../css_dashboard/style.css') }}">
</head>

<body>
    @include('layoutsss.navbar')
    <div class="wrapper-admin">
        @include('layoutsss.sidebar')
        <div class="admin-content">
            <div class="admin-header">
                <h1>Welcome to the Dashboard</h1>
                <p>This is the main content area of the dashboard.</p>
            </div>

            <div class="dashboard-card">
                
            </div>
        </div>
    </div>
</body>

</html>