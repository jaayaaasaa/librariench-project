<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
<body>
    
    
    <table class="w-full border-collapse border border-blue-500 max-w-xl mt-16 mx-auto">
  <thead>
    <tr class="bg-blue-500 text-white">
      <th class="py-2 px-4 text-left">Name</th>
      <th class="py-2 px-4 text-left">Age</th>
      <th class="py-2 px-4 text-left">City</th>
    </tr>
  </thead>
  <tbody>
    <tr class="bg-white border-b border-blue-500">
      <td class="py-2 px-4">John Doe</td>
      <td class="py-2 px-4">25</td>
      <td class="py-2 px-4">New York</td>
    </tr>
    <tr class="bg-white border-b border-blue-500">
      <td class="py-2 px-4">Jane Smith</td>
      <td class="py-2 px-4">30</td>
      <td class="py-2 px-4">Los Angeles</td>
    </tr>
    <tr class="bg-white border-b border-blue-500">
      <td class="py-2 px-4">Bob Johnson</td>
      <td class="py-2 px-4">40</td>
      <td class="py-2 px-4">Chicago</td>
    </tr>
  </tbody>
</table>
</body>
</html>