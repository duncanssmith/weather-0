<x-layout>
    <script>
        function getMessage() {
            $.ajax({
               type:'POST',
               url: $urlForecast,
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  $("#weather").html(data.msg);
               }
            });
        }
    </script>
    <section class="px-6 py-2">
    New Weather page

    <div id = 'weather'>This message will be replaced using Ajax. 
         Click the link to replace the message.</div>

        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">BUTTON</button>
    </section>
</x-layout>