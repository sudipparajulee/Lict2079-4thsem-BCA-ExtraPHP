<?php include 'header.php' ?>
    <h2 class="text-3xl font-bold">Blogs</h2>
    <hr class="h-1 bg-blue-600">
    <div class="text-right mt-5">
        <a href="createblog.php" class="bg-blue-600 px-5 py-2 rounded text-white">Add Blog</a>
    </div>
    <table class="w-full mt-10">
        <tr>
            <th class="border p-2">Date</th>
            <th class="border p-2">Title</th>
            <th class="border p-2">Image</th>
            <th class="border p-2">Description</th>
            <th class="border p-2">Action</th>
        </tr>
        <tr>
            <td class="border p-2">2021-01-01</td>
            <td class="border p-2">Blog 1</td>
            <td class="border p-2"><img src="https://picsum.photos/200/200" alt="" class="w-20 h-20 object-cover rounded"></td>
            <td class="border p-2 w-1/2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, sapiente?</td>
            <td class="border p-2 text-center">
                <a href="" class="bg-blue-600 px-3 py-1 rounded text-white">Edit</a>
                <a href="" class="bg-red-600 px-3 py-1 rounded text-white">Delete</a>
            </td>
        </tr>
        
    </table>
<?php include 'footer.php' ?>  