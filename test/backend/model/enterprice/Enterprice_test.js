var assert = require('assert');
const Enterprice = require('../../../../src/backend/model/enterprise/Enterprice');
const Job = require('../../../../src/backend/model/enterprise/Job');


describe('Enterprice_tests', function () {
  describe('#Enterprice getters', function () {
    const phoneNro = 1142422424;
    var aEnterprice = new Enterprice('',0,"BsAs", "Berazategui", "aDirection", phoneNro, 'a@email.com');

    it('getName', function () {
        assert.strictEqual(aEnterprice.getName(), '');
    });
    it('getCUIT', function () {
        assert.strictEqual(aEnterprice.getCUIT(), 0);
    });
    it('getProvince', function () {
        assert.strictEqual(aEnterprice.getProvince(), 'BsAs');
    });
    it('getLocality', function () {
        assert.strictEqual(aEnterprice.getLocality(), 'Berazategui');
    });
    it('getDirection', function () {
        assert.strictEqual(aEnterprice.getDirection(), 'aDirection');
    });
    it('getPhoneNro', function () {
        assert.strictEqual(aEnterprice.getPhoneNro(), phoneNro);
    });
    it('getEmail', function () {
        assert.strictEqual(aEnterprice.getEmail(), 'a@email.com');
    });
    it('getJobs', function () {
        assert.strictEqual(aEnterprice.getJobs().length, 0);
    });
  });

    describe('#Enterprice setters', function () {
    const phoneNro = 1142422424;
    var aEnterprice = new Enterprice('', 0, 'BsAs', 'Berazategui', 'aDirection', phoneNro, 'a@email.com');
    
    it('setName', function () {
        assert.strictEqual(aEnterprice.getName(), '');
        aEnterprice.setName('aName');
        assert.strictEqual(aEnterprice.getName(), 'aName');
    });

    it('setCUIT', function () {
        assert.strictEqual(aEnterprice.getCUIT(), 0);
        aEnterprice.setCUIT(01245);
        assert.strictEqual(aEnterprice.getCUIT(), 01245);
    });

    it('setProvince', function () {
        assert.strictEqual(aEnterprice.getProvince(), 'BsAs');
        aEnterprice.setProvince('BA');
        assert.strictEqual(aEnterprice.getProvince(), 'BA');
    });

    it('setLocality', function () {
        assert.strictEqual(aEnterprice.getLocality(), 'Berazategui');
        aEnterprice.setLocality('Bernal');
        assert.strictEqual(aEnterprice.getLocality(), 'Bernal');
    });

    it('setDirection', function () {
        assert.strictEqual(aEnterprice.getDirection(), 'aDirection');
        aEnterprice.setDirection('aDir');
        assert.strictEqual(aEnterprice.getDirection(), 'aDir');
    });

    it('setPhoneNro', function () {
        assert.strictEqual(aEnterprice.getPhoneNro(), phoneNro);
        aEnterprice.setPhoneNro(1123234545);
        assert.strictEqual(aEnterprice.getPhoneNro(), 1123234545);
    });

    it('setEmail', function () {
        assert.strictEqual(aEnterprice.getEmail(), 'a@email.com');
        aEnterprice.setEmail('a@gmail.com');
        assert.strictEqual(aEnterprice.getEmail(), 'a@gmail.com');
    });

    it('setJobs', function () {
        var job = new Job('', new Date(), new Date());

        assert.strictEqual(aEnterprice.getJobs().length, 0);
        aEnterprice.setJobs([job]);
        assert.strictEqual(aEnterprice.getJobs().length, 1);
        assert.strictEqual(aEnterprice.getJobs()[0], job);
    });
  });

  describe('#Enterprice setters', function () {
    var aEnterprice = new Enterprice('', 0, '', '', '', 0, '');
    var job = new Job('', new Date(), new Date());
    it('setName', function () {
        assert.strictEqual(aEnterprice.getJobs().length, 0);
        aEnterprice.addJob(job);
        assert.strictEqual(aEnterprice.getJobs().length, 1);
        assert.strictEqual(aEnterprice.getJobs()[0], job);
    });
  });
});
