import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-hyperlink', IndexField)
  app.component('detail-hyperlink', DetailField)
  app.component('form-hyperlink', FormField)
})

