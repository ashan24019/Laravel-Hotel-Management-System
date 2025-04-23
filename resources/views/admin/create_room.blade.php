<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')

    <!-- Sidebar Navigation-->
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div>
                    <form>
                        <div>
                            <label>Room Title</label>
                            <input type="text" name="title">
                        </div>

                        <div>
                            <label>Description</label>
                            <textarea name="description"></textarea>
                        </div>

                        <div>
                            <label>Price</label>
                            <input type="number" name="price">

                            <div>
                            <label>Room Type</label>
                            <select>
                                
                            </select>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- foter section -->
    @include('admin.footer')
</body>

</html>