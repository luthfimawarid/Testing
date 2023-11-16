<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Style untuk modal */
    .modal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 1;
    }

    /* Style untuk button di sebelah kanan */
    .modal-button {
      float: right;
    }

    /* Style untuk gambar di sebelah kiri */
    .modal-image {
      float: left;
      margin-right: 20px;
    }

    /* Style untuk menutup modal */
    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
    }
  </style>
</head>
<body>

<!-- Tombol untuk membuka modal -->
<button onclick="openModal()">Buka Modal</button>

<!-- Modal -->
<div id="myModal" class="modal">
  <!-- Konten modal -->
  <span class="close" onclick="closeModal()">&times;</span>
  <img src="path/to/your/image.jpg" alt="Image" class="modal-image">
  <button class="modal-button">Tombol di sebelah kanan</button>
</div>

<script>
  // Fungsi untuk membuka modal
  function openModal() {
    document.getElementById('myModal').style.display = 'block';
  }

  // Fungsi untuk menutup modal
  function closeModal() {
    document.getElementById('myModal').style.display = 'none';
  }
</script>

</body>
</html>
