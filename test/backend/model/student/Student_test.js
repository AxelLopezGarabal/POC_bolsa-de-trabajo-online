var assert = require('assert');
const career = require('../../../../src/backend/model/student/Career');
const Student = require('../../../../src/backend/model/student/Student');
const type = require('../../../../src/backend/model/student/TypeOfDocument');

describe('Student_tests', function () {
  describe('#Student geters', function () {
    var aStudent = new Student('aName', 'aLastName', type.ARG, 00000001, 'a@email.com', career.TPI, '?', '');
    it('getName', function () {
      assert.strictEqual(aStudent.getName(), 'aName');
    });

    it('getLastName', function () {
      assert.strictEqual(aStudent.getLastName(), 'aLastName');
    });

    it('getTypeOfDocument', function () {
      assert.strictEqual(aStudent.getTypeOfDocument(), type.ARG);
    });

    it('getDocumentNro', function () {
      assert.strictEqual(aStudent.getDocumentNro(), 00000001);
    });

    it('getEmail', function () {
      assert.strictEqual(aStudent.getEmail(), 'a@email.com');
    });

    it('getCareer', function () {
      assert.strictEqual(aStudent.getCareer(), career.TPI);
    });

    it('getYear', function () {
      assert.strictEqual(aStudent.getYear(), '?');
    });

    it('getDetails', function () {
      assert.strictEqual(aStudent.getDetails(), '');
    });

    it('getState', function () {
      assert.strictEqual(aStudent.getState(), false);
    });
  });

  describe('#Student State', function () {
    var aStudent = new Student('', '', type.ARG, 00000001, '', career.TPI, '', '');
    it('getState', function () {
      assert.strictEqual(aStudent.getState(), false);
      aStudent.changeState();
      assert.strictEqual(aStudent.getState(), true);
    });
  });

  describe('#Student setters', function () {
    var aStudent = new Student('', '', type.ARG, 00000000, '', career.TPI, '1', '');
    it('setName', function () {
      assert.strictEqual(aStudent.getName(), '');
      aStudent.setName('aName');
      assert.strictEqual(aStudent.getName(), 'aName');
    });

    it('setLastName', function () {
      assert.strictEqual(aStudent.getLastName(), '');
      aStudent.setLastName('aLastName');
      assert.strictEqual(aStudent.getLastName(), 'aLastName');
    });

    it('setTypeOfDocument', function () {
      assert.strictEqual(aStudent.getTypeOfDocument(), type.ARG);
      aStudent.setTypeOfDocument(type.PAR);
      assert.strictEqual(aStudent.getTypeOfDocument(), type.PAR);
    });

    it('setDocumentNro', function () {
      assert.strictEqual(aStudent.getDocumentNro(), 00000000);
      aStudent.setDocumentNro(00000100)
      assert.strictEqual(aStudent.getDocumentNro(), 00000100);
    });

    it('setEmail', function () {
      assert.strictEqual(aStudent.getEmail(), '');
      aStudent.setEmail('a@email.com');
      assert.strictEqual(aStudent.getEmail(), 'a@email.com');
    });

    it('setCareer', function () {
      assert.strictEqual(aStudent.getCareer(), career.TPI);
      aStudent.setCareer(career.LI);
      assert.strictEqual(aStudent.getCareer(), career.LI);
    });

    it('setYear', function () {
      assert.strictEqual(aStudent.getYear(), '1');
      aStudent.setYear('?');
      assert.strictEqual(aStudent.getYear(), '?');
    });

    it('setDetails', function () {
      assert.strictEqual(aStudent.getDetails(), '');
      aStudent.setDetails('a');
      assert.strictEqual(aStudent.getDetails(), 'a');
    });
  });
});
