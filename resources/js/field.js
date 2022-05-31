import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-nova-number-format', IndexField)
  app.component('detail-nova-number-format', DetailField)
  app.component('form-nova-number-format', FormField)
})
