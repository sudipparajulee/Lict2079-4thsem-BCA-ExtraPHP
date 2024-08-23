<?php 
include 'header.php';
$qry = "SELECT * FROM blogs";
include '../dbconnection.php';
$result = mysqli_query($conn, $qry);
include '../closeconnection.php';
?>
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
        <?php 
            while($row = mysqli_fetch_assoc($result))
            {   
        ?>
        <tr>
            <td class="border p-2"><?php echo $row['blog_date']; ?></td>
            <td class="border p-2"><?php echo $row['title']; ?></td>
            <td class="border p-2"><img src="../uploads/<?php echo $row['photopath']; ?>" alt="" class="w-20 h-20 object-cover rounded"></td>
            <td class="border p-2 w-1/2"><?php echo $row['description'] ?></td>
            <td class="border p-2 text-center">
                <a href="editblog.php?id=<?php echo $row['id'];?>" class="bg-blue-600 px-3 py-1 rounded text-white">Edit</a>
                <a href="" class="bg-red-600 px-3 py-1 rounded text-white">Delete</a>
            </td>
        </tr>
        <?php
            }
        ?>
        
    </table>
<?php include 'footer.php' ?>  