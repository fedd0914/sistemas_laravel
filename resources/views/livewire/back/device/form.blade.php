<div class="row">
    <x-admin.input title="Inventario" model="device.inventario" required=true tabindex=1 classes="col-md-6"/>
    <x-admin.input title="Descripcion" model="device.descripcion" required=true tabindex=2 classes="col-md-6"/>
</div>
<div class="row">
    <x-admin.input type="date" title="Fecha de compra" model="device.fecha_compra" required=true tabindex=3 classes="col-md-6"/>
    <x-admin.select
        model="deviceTypeSelected"
        title="Tipo de dispositivo:"
        :values="$devicesTypes"
        classes="col-md-6"
        tabindex=4
    />
</div>
<div class="row">
    <x-admin.select
        model="areaSelected"
        title="Area:"
        :values="$areas"
        classes="col-md-6"
        tabindex=5
    />

    <x-admin.input title="Usuario asignado" model="device.userAsigned" required=true tabindex=6 classes="col-md-6"/>
</div>

@if($deviceTypeSelected == 1 || $deviceTypeSelected == 2)
        <div style="text-align: center;">
            <h3> Componentes</h3>
        </div>
        <div class="row">
            <x-admin.input title="CPU" model="device.cpu" tabindex=7 classes="col-md-12"/>

            <x-admin.input title="Placa madre" model="device.motherboard" tabindex=8 classes="col-md-12"/>

            <x-admin.input title="RAM" model="device.ram" tabindex=9 classes="col-md-12"/>

            <x-admin.input title="Disco" model="device.drive" tabindex=10 classes="col-md-12"/>

            <x-admin.input title="Fuente" model="device.power_supply" tabindex=11 classes="col-md-12"/>
        </div>
    @endif
