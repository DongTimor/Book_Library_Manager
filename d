[1mdiff --git a/resources/views/add_book.blade.php b/resources/views/add_book.blade.php[m
[1mindex acdfa78..85edae0 100644[m
[1m--- a/resources/views/add_book.blade.php[m
[1m+++ b/resources/views/add_book.blade.php[m
[36m@@ -5,6 +5,9 @@[m
     <div>[m
         <h1>Admin create book</h1>[m
     </div>[m
[32m+[m[32m    <div>[m
[32m+[m[32m        <h1>Admin book</h1>[m
[32m+[m[32m    </div>[m
     <form action="{{ route('admin.books.store') }}" method="post">[m
         @csrf[m
         <input type="text" name="title" placeholder="Title">[m
