 @if (isset($notification) && $notification)
     <div class="fixed top-4 bg-green-200 text-black px-6 py-4 rounded-lg shadow-lg z-50 animate-pulse border border-green-100"
         id="orderAlert">
         <div class="flex items-center justify-between">
             <div>
                 <p class="font-bold text-lg text-clack">Order Ready!</p>
                 <p class="mt-2">{{ $notification['message'] }}</p>
             </div>
             <button onclick="document.getElementById('orderAlert').remove()"
                 class="ml-4 text-clack hover:text-gray-200 text-2xl font-bold">×</button>
         </div>
     </div>

     <script>
         setTimeout(() => {
             const alert = document.getElementById('orderAlert');
             if (alert) {
                 alert.style.transition = 'opacity 0.5s';
                 alert.style.opacity = '0';
                 setTimeout(() => alert.remove(), 500);
             }
         }, 10000);
     </script>
 @endif
