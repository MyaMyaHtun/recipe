<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require APPROOT . '/views/components/auth_message.php'; ?>

<?php require_once APPROOT . '/views/inc/nav.php' ?>

<div class="container">
    <div class="card">
        <img src="path_to_pizza_image.jpg" alt="Pizza">
        <button>View Detail</button>
    </div>
    








<style>
    .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 240px;
            text-align: center;
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card button {
            background-color: #ff7433;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .card button:hover {
            background-color: #e36222;
        }
</style>