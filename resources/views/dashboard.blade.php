@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<style>

.cardBox
{
    position: relative;
    width: 100%;
    padding: 20px;
    display: grid;
    grid-template-columns: repeat(4,1fr);
    grid-gap: 30px;
}

.cardBox .card
{
    position: relative;
    background: var(white);
    padding: 30px;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    box-shadow: 0 7px 25px rgba(0, 0, 0,0.08);
    border-radius: 20px;
}

.cardBox .card .numbers
{
    position: relative;
    font-weight: 500;
    font-size: 2.5em;
    color:rgb(40, 112, 221);
}

.cardBox .card .cardName
{
    color: #999;
    font-size: 1.1em;
    margin-top: 5px;
}

.cardBox .card .iconBx
{
    font-size: 3.5em;
    color: #999;
}

.cardBox .card:hover
{
    background: #0F71F2;
}

.cardBox .card:hover .numbers,
.cardBox .card:hover .cardName,
.cardBox .card:hover .iconBx
{
    color: white;
}

.details
{
    position: relative;
    width: 100%;
    padding: 20px;
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 30px;
    /* margin-top: 10px; */
}

</style>

    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">40,00</div>
                <div class="cardName">Productos</div>
            </div>
            <div class="iconBx"><ion-icon name="eye-outline"></ion-icon></div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">80k</div>
                <div class="cardName">Ventas</div>
            </div>
            <div class="iconBx"><ion-icon name="cart-outline"></ion-icon></div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">1</div>
                <div class="cardName">Proveedores</div>
            </div>
            <div class="iconBx"><ion-icon name="chatbubbles-outline"></ion-icon></div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">$250k</div>
                <div class="cardName">Ganancias</div>
            </div>
            <div class="iconBx"><ion-icon name="cash-outline"></ion-icon></div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
