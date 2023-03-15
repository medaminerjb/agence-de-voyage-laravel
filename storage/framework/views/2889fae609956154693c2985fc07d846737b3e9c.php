<div>
    <div class="p-6" wire:ignore>
        <input wire:model="idCalendar" type="text" hidden>
        <div class="calendar"></div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>

<script>
    document.addEventListener('livewire:load', () => {
        document.querySelectorAll('.calendar').forEach(element => {
            if(element.previousElementSibling.value == window.livewire.find('<?php echo e($_instance->id); ?>').idCalendar) {
                let calendar = new FullCalendar.Calendar(element, {
                    headerToolbar: {
                        left: 'prev,next today',
                        right: 'title'
                    },
                    validRange: function(nowDate) {
                        return {
                            start: nowDate.setDate(nowDate.getDate() + 1)
                        };
                    },
                    locale: '<?php echo e(config('app.locale')); ?>',
                    selectable: true,
                    select: info => {
                        calendar.event = {
                            start: info.startStr,
                            end: info.endStr,
                            allDay: info.allDay,
                            display: 'background'
                        };
                        Livewire.emit('openModal', 'confirm', { 
                            calendarId: calendar.id,
                            dateStart: info.startStr,
                            dateEnd: info.endStr
                        });
                    },
                    selectOverlap: () => {
                        return false;
                    },
                    events: JSON.parse(window.livewire.find('<?php echo e($_instance->id); ?>').events)
                });             
                calendar.id = window.livewire.find('<?php echo e($_instance->id); ?>').idCalendar; 
                calendar.render();
                Livewire.on('eventChecked', data => {                    
                    if(calendar.id == data.id && data.ok) {
                        calendar.addEvent(calendar.event);
                        window.livewire.find('<?php echo e($_instance->id); ?>').addEvent(calendar.event);                     
                    }
                });
            };
        });
    });
</script>

<?php $__env->stopPush(); ?><?php /**PATH C:\laragon\www\maysarv3\resources\views/livewire/calendar.blade.php ENDPATH**/ ?>