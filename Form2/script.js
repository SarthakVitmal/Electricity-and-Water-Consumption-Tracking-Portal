function addDeviceFields() {
    const newDeviceContainer = document.createElement('div');
    newDeviceContainer.className = 'device1';
    newDeviceContainer.style.display = 'flex';

    const input1 = document.createElement('input');
    input1.type = 'text';
    input1.placeholder = 'Name of the appliance';

    const input2 = document.createElement('input');
    input2.type = 'number';
    input2.placeholder = 'Number of devices';

    const input3 = document.createElement('input');
    input3.type = 'number';
    input3.placeholder = 'Duration';

    newDeviceContainer.appendChild(input1);
    newDeviceContainer.appendChild(input2);
    newDeviceContainer.appendChild(input3);

    const devicesContainer = document.getElementById('devices-container');
    devicesContainer.appendChild(newDeviceContainer);
}
