

// Реализация модального окна
import GraphModal from 'graph-modal';

const modal = new GraphModal();

import { validateForms } from '../functions/validate-forms';


// const rules1 = [
//   {
//     ruleSelector: '.input-name8',
//     rules: [
//       {
//         rule: 'minLength',
//         value: 3,
//         errorMessage: 'Минимально 3 символа!'
//       },
//       {
//         rule: 'required',
//         value: true,
//         errorMessage: 'Заполните имя!'
//       }
//     ]
//   },
//   {
//     ruleSelector: '.input-tel8',
//     tel: true,
//     telError: 'Введите корректный телефон',
//     rules: [
//       {
//         rule: 'required',
//         value: true,
//         errorMessage: 'Заполните телефон!'
//       }
//     ]
//   },
//   {
//     ruleSelector: '.input-data8',
//     rules: [
//       {
//         rule: 'minLength',
//         value: 3,
//         errorMessage: 'Минимально 3 символа!'
//       },
//       {
//         rule: 'required',
//         value: true,
//         errorMessage: 'Заполните имя!'
//       }
//     ]
//   },
// ];

// const afterForm = () => {
//   modal.open('thanks');
//   // modal.close('callme');
//   // modal.close('lead');

//   // console.log('Произошла отправка, тут можно писать любые действия');
// };

// validateForms('.form', rules1, afterForm);

// ФОРМА 1
const rules1 = [
  {
    ruleSelector: '.input-name',
    rules: [
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Минимально 3 символа!'
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
    {
    ruleSelector: '.input-data',
    rules: [
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Минимально 3 символа!'
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
  {
    ruleSelector: '.input-tel',
    tel: true,
    telError: 'Введите корректный телефон',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните телефон!'
      }
    ]
  },
];

const afterForm1 = () => {
  modal.close('lead');
  modal.open('thanks');

  // console.log('Произошла отправка, тут можно писать любые действия');
};

validateForms('.form-1', rules1, afterForm1);

// КАЛЬКУЛЯТОР
const rules2 = [
  {
    ruleSelector: '.input-name1',
    rules: [
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Минимально 3 символа!'
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
    {
    ruleSelector: '.input-data1',
    rules: [
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Минимально 3 символа!'
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните имя!'
      }
    ]
  },
  {
    ruleSelector: '.input-tel1',
    tel: true,
    telError: 'Введите корректный телефон',
    rules: [
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните телефон!'
      }
    ]
  },
  {
    ruleSelector: '.input-city1',
    rules: [
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Минимально 3 символа!'
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните откуда!'
      }
    ]
  },
  {
    ruleSelector: '.input-city2',
    rules: [
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Минимально 3 символа!'
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните куда!'
      }
    ]
  },
  {
    ruleSelector: '.input-date',
    rules: [
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Минимально 3 символа!'
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните дату!'
      }
    ]
  },
  {
    ruleSelector: '.input-what',
    rules: [
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Минимально 3 символа!'
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните груз!'
      }
    ]
  },
  {
    ruleSelector: '.input-car',
    rules: [
      {
        rule: 'minLength',
        value: 3,
        errorMessage: 'Минимально 3 символа!'
      },
      {
        rule: 'required',
        value: true,
        errorMessage: 'Заполните выбор машины'
      }
    ]
  },
];

const afterForm2 = () => {
  modal.close('lead');
  modal.open('thanks');

  // console.log('Произошла отправка, тут можно писать любые действия');
};

validateForms('.form-2', rules2, afterForm2);


// ФОРМА 3
// const rules3 = [
//   {
//     ruleSelector: '.input-name-check',
//     rules: [
//       {
//         rule: 'minLength',
//         value: 3,
//         errorMessage: 'Минимально 3 символа!'
//       },
//       {
//         rule: 'required',
//         value: true,
//         errorMessage: 'Заполните имя!'
//       }
//     ]
//   },
//     {
//     ruleSelector: '.input-data-check',
//     rules: [
//       {
//         rule: 'minLength',
//         value: 3,
//         errorMessage: 'Минимально 3 символа!'
//       },
//       {
//         rule: 'required',
//         value: true,
//         errorMessage: 'Выбирите хоть 1 чекбокс'
//       }
//     ]
//   },
//   {
//     ruleSelector: '.input-tel-check',
//     tel: true,
//     telError: 'Введите корректный телефон',
//     rules: [
//       {
//         rule: 'required',
//         value: true,
//         errorMessage: 'Заполните телефон!'
//       }
//     ]
//   },
// ];

// const afterForm3 = () => {
//   modal.close('check');
//   modal.open('thanks');

//   // console.log('Произошла отправка, тут можно писать любые действия');
// };

// validateForms('.form-3', rules3, afterForm3);


// // ФОРМА 4
// const rules4 = [
//   {
//     ruleSelector: '.input-name-check4',
//     rules: [
//       {
//         rule: 'minLength',
//         value: 3,
//         errorMessage: 'Минимально 3 символа!'
//       },
//       {
//         rule: 'required',
//         value: true,
//         errorMessage: 'Заполните имя!'
//       }
//     ]
//   },
//     {
//     ruleSelector: '.input-data-check4',
//     rules: [
//       {
//         rule: 'minLength',
//         value: 3,
//         errorMessage: 'Минимально 3 символа!'
//       },
//       {
//         rule: 'required',
//         value: true,
//         errorMessage: 'Заполните имя!'
//       }
//     ]
//   },
//   {
//     ruleSelector: '.input-tel-check4',
//     tel: true,
//     telError: 'Введите корректный телефон',
//     rules: [
//       {
//         rule: 'required',
//         value: true,
//         errorMessage: 'Заполните телефон!'
//       }
//     ]
//   },
// ];

// const afterForm4 = () => {
//   modal.close('check4');
//   modal.open('thanks');

//   // console.log('Произошла отправка, тут можно писать любые действия');
// };

// validateForms('.form-4', rules4, afterForm4);
