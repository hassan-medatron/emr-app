<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="assets/img/medatron/logo.png" width="40">
            </span>
            <span class="app-brand-text demo menu-text ms-2">{{ config('app.name') }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <x-menu-item :href="route('dashboard')" :active="request()->routeIs('dashboard')" iconClass="bx bx-home-circle">Dashboard</x-menu-item>
        <x-menu-item :href="route('calendar')" :active="request()->routeIs('calendar')" iconClass="bx bx-calendar">Calendar</x-menu-item>
        <x-menu-item :href="route('patients')" :active="request()->routeIs('patients')" iconClass="bx bx-user">Patients</x-menu-item>
        <x-menu-item :href="route('orders')" :active="request()->routeIs('orders')" iconClass="bx bx-file">Orders</x-menu-item>

        <x-menu-items-group :routesArray="[
            'patient-report',
            'revenue-report',
            'referring-provider-report',
            'orders-report',
            'payment-report',
            'inventory-report',
            'billing-report',
            'ar-aging-report',
            'audit-report',
        ]" iconClass="bx bxs-report" menuGroupName="Reports">
            <x-menu-item :href="route('patient-report')" :active="request()->routeIs('patient-report')">Patients</x-menu-item>
            <x-menu-item :href="route('revenue-report')" :active="request()->routeIs('revenue-report')">Revenue</x-menu-item>
            <x-menu-item :href="route('referring-provider-report')" :active="request()->routeIs('referring-provider-report')">Referring Providers</x-menu-item>
            <x-menu-item :href="route('orders-report')" :active="request()->routeIs('orders-report')">Orders</x-menu-item>
            <x-menu-item :href="route('payment-report')" :active="request()->routeIs('payment-report')">Payments</x-menu-item>
            <x-menu-item :href="route('inventory-report')" :active="request()->routeIs('inventory-report')">Inventory</x-menu-item>
            <x-menu-item :href="route('billing-report')" :active="request()->routeIs('billing-report')">Billing</x-menu-item>
            <x-menu-item :href="route('ar-aging-report')" :active="request()->routeIs('ar-aging-report')">Ar Aging</x-menu-item>
            <x-menu-item :href="route('audit-report')" :active="request()->routeIs('audit-report')">Audit</x-menu-item>
        </x-menu-items-group>

        <x-menu-items-group :routesArray="['settings', 'users', 'organization', 'billing', 'inventory']" iconClass="bx bxs-cog" menuGroupName="Management">
            <x-menu-item :href="route('settings')" :active="request()->routeIs('settings')">Settings</x-menu-item>
            <x-menu-item :href="route('users')" :active="request()->routeIs('users')">Users</x-menu-item>
            <x-menu-item :href="route('organization')" :active="request()->routeIs('organization')">Organization</x-menu-item>
            <x-menu-item :href="route('billing')" :active="request()->routeIs('billing')">Billing</x-menu-item>
            <x-menu-item :href="route('inventory')" :active="request()->routeIs('inventory')">Inventory</x-menu-item>
        </x-menu-items-group>

        <x-menu-items-group :routesArray="[
            'invoices',
            'payments',
            'refunds',
            'denials',
            'eob-era',
            'prescriptions',
            'authorizations',
            'cmns',
            'deposits',
        ]" iconClass="bx bx-dollar-circle" menuGroupName="Billing">
            <x-menu-item :href="route('invoices')" :active="request()->routeIs('invoices')">Invoices</x-menu-item>
            <x-menu-item :href="route('payments')" :active="request()->routeIs('payments')">Payments</x-menu-item>
            <x-menu-item :href="route('refunds')" :active="request()->routeIs('refunds')">Refunds</x-menu-item>
            <x-menu-item :href="route('denials')" :active="request()->routeIs('denials')">Denials</x-menu-item>
            <x-menu-item :href="route('eob-era')" :active="request()->routeIs('eob-era')">EOB/ERA</x-menu-item>
            <x-menu-item :href="route('prescriptions')" :active="request()->routeIs('prescriptions')">Prescriptions</x-menu-item>
            <x-menu-item :href="route('authorizations')" :active="request()->routeIs('authorizations')">Authorizations</x-menu-item>
            <x-menu-item :href="route('cmns')" :active="request()->routeIs('cmns')">CMNs</x-menu-item>
            <x-menu-item :href="route('deposits')" :active="request()->routeIs('deposits')">Deposits</x-menu-item>
        </x-menu-items-group>


        <x-menu-items-group :routesArray="['items', 'purchase-order']" iconClass="bx bxs-dashboard" menuGroupName="Inventory">
            <x-menu-item :href="route('items')" :active="request()->routeIs('items')">Items</x-menu-item>
            <x-menu-item :href="route('purchase-order')" :active="request()->routeIs('purchase-order')">Purchase Orders</x-menu-item>
        </x-menu-items-group>

        <x-menu-items-group :routesArray="['claims-reconsiderations']" iconClass="bx bx-bot" menuGroupName="Automations">
            <x-menu-item :href="route('claims-reconsiderations')" :active="request()->routeIs('claims-reconsiderations')">Claims Recon.</x-menu-item>
        </x-menu-items-group>
    </ul>
</aside>
