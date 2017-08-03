import { Routes } from '@angular/router';

import { BasicComponent } from './basic/basic.component';
import { ResponsiveComponent } from './responsive/responsive.component';

export const TablesRoutes: Routes = [
  {
    path: '',
    children: [{
      path: 'countries',
      component: BasicComponent,
      data: {
        heading: 'Basic table'
      }
    }, {
      path: 'responsive',
      component: ResponsiveComponent,
      data: {
        heading: 'Responsive'
      }
    }]
  }
];
